const mix = require('laravel-mix');

// site
mix.css('resources/css/site/main.css', "public/css/site.css");
mix.css('resources/css/admin/admin-main.css', 'public/css/admin.css');

// admin panel
mix.js('resources/js/admin/app.js', 'public/js/admin.js').vue();
