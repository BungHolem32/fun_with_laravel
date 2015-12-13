
var SpotstreamerWrapper = function(subscribeString, callbackFunction, url ){
    this.streamer = null;
    
    this.updateInterval = 30;
    
    var _subscribeStringsArray = new Array();
    
    var _tableName = 'test';
    
    var _url = url || 'http://sst3-a-nl.spotoption.com:8080/'
    
    var _callbackFunction = null;
    
    var _that = this;
    
    //private methods
    var _recieveData = function(subscribeString, answer){
        if(typeof _callbackFunction == 'function'){   
            _callbackFunction(answer, subscribeString);
        }
    };
    
    /**
     * initilize SpotStreamer
     */
    var _init = function(){
      
        //init the properties
        if(false === Streamer.loaded){
            //init Streamer object
            Streamer.init(_url);
        }
        
        _that.streamer = Streamer;
        
        _subscribeStringsArray.push(subscribeString);
      
        _callbackFunction = callbackFunction;
    }; 

    
    //public methods
    this.subscribe = function(){
        _that.streamer.subscribe(_subscribeStringsArray, _recieveData);
    };
    
    /**
     * Remove subscription from spotstreamer.
     * 
     */
    this.unsubscribe = function(){
        // Because _recieveData callback method passed to the streamer only specific callback will
        // be removed and not all callbacks that are related to 
        // subscribtion string
        _that.streamer.unsubscribe(_subscribeStringsArray[0], _recieveData);
    }
     
    //constructor
    _init();
};