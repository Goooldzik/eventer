const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')

    .js('resources/js/events/changeEventDate.js', 'public/js/events')
    .js('resources/js/events/deleteEvent.js', 'public/js/events')
    .js('resources/js/events/createEvent.js', 'public/js/events')

    .js('resources/js/pages/createPage', 'public/js/pages')
    .js('resources/js/pages/updatePage', 'public/js/pages')

    .js('resources/js/tickets/bookTicket.js', 'public/js/tickets')
    .js('resources/js/tickets/book-off.js', 'public/js/tickets')

    .js('resources/js/users/createNewUser.js', 'public/js/users')
    .js('resources/js/users/updateUser.js', 'public/js/users')

    .sass('resources/sass/app.scss', 'public/css')

    .copy('node_modules/chart.js/dist/chart.js', 'public/js')
    .sourceMaps();
