/**
 *  SpotStreamer client module. Used to subscribe and unsubscribe entities
 *  so you can receive updates for them.
 */
var Streamer = new function() {
    /*************************************************************************/
    /************************** Private properties ***************************/
    /*************************************************************************/    
    var _that = this;
    
    var _settings = {
        // Native socket.io setting
        socket_io : {
            // Number of connection attempts to given address
            'max reconnection attempts': 10,
            'reconnection delay' : 500,
            'connect timeout' : 5000
        },
        // Max number of attempts we will try to reconnect to different ports
        maxAttemptsNumber : 100,
        // List of ports we will try to connect 
        ports : [8082, 80, 8080]
    };
  
    // socket.io object
    var _socket = null;
  
    // true if init was triggered
    var _initTriggered = false;
  
    var _streamerUrl = 'http://sst6-a-nl.spotoption.com:8089/';
  
    var _streamerUrlParsed = null;
  
    var _port = 0;
  
    // Since we running our connection retries on the array of ports from index 0
    // initial value for _attempt will be -1
    var _attempt = 0; 
    
    /*************************************************************************/
    /*************************** Public properties ***************************/
    /*************************************************************************/   
    // if module was loaded
    this.loaded = false;
  
    // map of subscribed IDs and their callback functions
    this.subscriptions = {};

    /*************************************************************************/
    /*************************** Private methods *****************************/
    /*************************************************************************/ 
    
    /**
     * Init socked with callback methods
     */
    var _initCallbacks = function() {
        _socket.on('connect', function () {
            //console.log("STREAMER: connected using '" + _socket.socket.transport.name + "' transport");
            var keys = [];

            // subscribe all subscribed keys
            $.each(Streamer.subscriptions, function(key, value) {
                keys.push(key);
            });
      
            _socket.emit('add', keys);
        });

        _socket.on('connecting', function() {
          //  console.log("STREAMER: connecting");
        });

        _socket.on('message', function() {
          //  console.log("STREAMER: message received");
        });

        _socket.on('close', function() {
        //    console.log("STREAMER: close");
        });

        _socket.on('connect_failed', function() {
          //  console.log("STREAMER: connect failed, reconnecting");
            _handleError();
        });

        _socket.on('disconnect', function() {
         //   console.log("STREAMER: disconnected " + _socket.socket.transport.name);
        });
      
        _socket.on('reconnect', function() {
         //   console.log("STREAMER: reconnect");
        });      

        _socket.on('reconnecting', function() {
          //  console.log("STREAMER: reconnecting " + _socket.socket.transport.name);
        });

        _socket.on('reconnect_failed', function() {
         //   console.log("STREAMER: reconnect_failed ");
        });


        _socket.on('error', function() {
            //console.log("STREAMER: connect error, reconnecting");
            _handleError();
        });

        _socket.on('update', function (data) {
            for (var id in data) {
                // call callback assigned to subscribed ID
                for (var i = 0 ; Streamer.subscriptions[id] && i < Streamer.subscriptions[id].length ; i++) {
                    var f = Streamer.subscriptions[id][i];
                    f.apply(null, [ id, data[id] ]);
                }
            }
        });
    };  
    
    /**
     * Create socket connection.
     * This method will rotate through list of port using modulus.
     */
    var _connect = function(){
        // Disconnect and delete current socket connection
        if (_socket){
            _socket.disconnect();
            delete io.sockets[_streamerUrl + ':' + _port];
        }
        _port = _settings.ports[_attempt++ % _settings.ports.length];
      //  console.log("STREAMER: trying to connect " + _streamerUrl + ':' + _port);
        
        _socket = io.connect(_streamerUrl + ":" + _port, _settings.socket_io);

        _initCallbacks();        
    };
    
    /**
     * Handle connection errors
     */
    var _handleError = function() {
        if (_attempt < _settings.maxAttemptsNumber){
            _connect();
            return;
        }
        
        throw 'Failed to connect to streamer in maximum amount of attempts';
    };    
    
    /*************************************************************************/
    /*************************** Public methods ******************************/
    /*************************************************************************/   

    /**
    *  Initialise module. This must be called to start receiving updates.
    *
    *  @param url optional, if specified, URL of SpotStreamer server. If
    *             omitted, use default URL, which is the site domain
    *             prepended by "ls3.".
    */
    this.init = function(url) {       
        // If Streamer was already loaded or init was triggered
        // then there is no need to run init method again
        if (Streamer.loaded || _initTriggered){
            return;
        }
    
        _initTriggered = true;
        
        // Try to parse given URL, if 'URI malformed' error is thrown set url to false
        try {
            _streamerUrlParsed = $.url(url);
        }
        catch (ex) {
            url = false;
        }
        
        // Exit and throw exception
        if (!url) {
            throw 'Please set valid spotstreamerUrl value in config';
        }

        var _prepareStreamerUrl = function() {
            // Get browser page protocol, remove semicolon to get clear protocol name
            var protocol = document.location.protocol.replace(':', ''), port = '';

            // If url specified in config has port that means we want to use specific port only
            // We shoud set list of ports to the single port.
            if (_streamerUrlParsed.attr('port') != ''){
                _settings.ports = [parseInt(_streamerUrlParsed.attr('port'))];
            }

            // If url specified in config has https protocol 
            // that means we want to force using https on all pages both secured and unsecured
            // Or current page is secured the we set protocol to https and list of ports to single port 443
            if ('https' == _streamerUrlParsed.attr('protocol') || 'https' == protocol) {
                protocol = 'https';
                _settings.ports = [443];
            }
            
            // Build streamer url from created parts
            _streamerUrl = protocol + '://' + _streamerUrlParsed.attr('host');
        };

        _prepareStreamerUrl();
        
        // get socket.io client script which resides on the server
      //  $.getScript("socket.io.js", function() {
          //  console.log('loaded')
            Streamer.loaded = true;
            _connect();
       // });
    };
  
    /**
    *  Subscribe an entity to start receiving updates for it when it changes.
    *
    *  @param entity ID or array of IDs of entities to subscribe, e.g. "time" or "asset_2_489_BBinary" etc.
    *  @param callback callback function called when updates are received.
    *                  Function received the updates ID as first parameter, and updated
    *                  data as sent from SpotStreamer server as second parameter.
    */
    this.subscribe = function(entity, callback) {
        if (typeof entity === 'string'){
            entity = [ entity ];
        }

        for (var i = 0 ; i < entity.length ; i++) {
            if (!Streamer.subscriptions[entity[i]]){
                Streamer.subscriptions[entity[i]] = [];
            }

            var duplicate = false;
            for (var j = 0 ; j < Streamer.subscriptions[entity[i]].length ; j++) {
                if (Streamer.subscriptions[entity[i]][j] == callback)
                    duplicate = true;
            }

            if (!duplicate){
                Streamer.subscriptions[entity[i]].push(callback);
            }
        }
        console.log(Streamer.loaded);
        if (Streamer.loaded){
            _socket.emit('add', entity, function() {
             //   console.log(entity)
            //console.log("add succeeded " + entity);
            });
        }
    };
  
    /**
    *  Unsubscribe an entity to stop receiving updates for it.
    *
    *  @param entity ID of entity to unsubscribe
    *  @param callbackMethod function - if specified only the callback will be removed and not the all entity
    */
    this.unsubscribe = function(entity, callbackMethod) {
        //removes entity (all callbacks)
        var removeEntity = function(id){
           
            if (Streamer.loaded){
                _socket.emit('remove', [ id ]);
            }
            
            delete Streamer.subscriptions[id];
        } 
        //callback method defined, that means that the entity is full
        //string and there no need to use indexOf
        if(typeof callbackMethod == 'function'){
            for(var key in Streamer.subscriptions[entity]){
                if(Streamer.subscriptions[entity][key] === callbackMethod){
                    //remove the callback
                    Streamer.subscriptions[entity].splice(key, 1);
                    //if there is no callbacks left for the entity remove the entity
                    if(Streamer.subscriptions[entity].length == 0){
                        removeEntity(entity);
                    }
                    break;  
                }
            }
        }
        else{
            for (var id in Streamer.subscriptions) {
                if (id.indexOf(entity) === 0) {
                    removeEntity(entity);
                }
            }
        }
    };
};