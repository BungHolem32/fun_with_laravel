var elixir = require('laravel-elixir');
var fs = require('fs');

/* Elixir Asset Management
 |------------------------
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks for your Laravel application. By default, we are compiling the Less file for our application, as well as publishing vendor resources. */



elixir(function(mix) {

    /*mix.less(['admin.less'], 'public_html/adminpanel/css/admin.css')*/
     mix.less(['base-funnel-load-ltr.less'], 'public_html/css/demoaccounts-0.css')
     ;//.less(['base-funnel-load-rtl.less'], 'public_html/css/-1.css');

});