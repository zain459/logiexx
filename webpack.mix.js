const mix = require('laravel-mix');

// site
mix.css('resources/css/site/main.css', "public/css/site.css");

// admin panel
mix.js('resources/js/admin/app.js', 'public/js/admin.js').vue();
