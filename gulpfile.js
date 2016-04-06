var elixir = require('laravel-elixir');
var fs = require('fs');
elixir.config.sourcemaps = true;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    /*mix.less(['admin.less'], 'public_html/adminpanel/css/admin.css') */
    /*mix.less(['load-ltr.less'], 'public_html/css/bootstrap/rboptions-org-0.css')
        .less(['load-rtl.less'], 'public_html/css/bootstrap/rboptions-org-1.css');*/

    /*mix.less(['base-funnel-load-ltr.less'], 'public_html/css/lp/binary-currencies-0.css')
        .less(['base-funnel-load-rtl.less'], 'public_html/css/lp/binary-currencies-1.css');*/

    //mix.less(['base-funnel-load-ltr.less'], 'public_html/css/aussie-new/style-0.css')
    //   .less(['base-funnel-load-rtl.less'], 'public_html/css/aussie-new/style-1.css');
    //
    // mix.less(['aussie-member-new.less'], 'public_html/css/aussie-new/style-members-0.css');
    // .less(['base-funnel-load-rtl.less'], 'public_html/css/aussie-new/style-members-1.css');

    mix.less(['brand/pages/trade.less'], 'public/css/trade.css'); 
    
    //mix.less(['brand/pages/trade.less'], 'public/css/trade.css');
    //mix.less(['brand/pages/accounts.less'], 'public/css/accounts.css');

    /*fs.readdir('resources/assets/less/brand/pages', function(err, files){
        files.forEach(function(name){
            name2 = name.replace('.less', '');
            mix.less(['brand/pages/'+name],'public/css/'+name2+'.css');
            elixir.config.wait = 0;
        });
    });*/

});



/*
elixir(function(mix) {
    mix.styles([
        "dropzone.css"
    ], 'public/css/com.css', 'resources/views/com/dropzone');
});*/
