// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

let mix = require('laravel-mix');

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

mix
    // Admin
    .webpackConfig({
        resolve: {
            alias: {
                Admin: path.resolve(__dirname, 'resources/assets/admin'),
                Assets: path.resolve(__dirname, 'resources/assets')
            }
        },
        plugins: [
          // new BundleAnalyzerPlugin()
      ],
    })

    // User
    .styles([
       'resources/assets/user/static/assets/css/bootstrap.min.css',
       'resources/assets/user/static/assets/css/font-awesome.min.css',
       'resources/assets/user/static/assets/css/themify-icons.css',
       'resources/assets/user/static/assets/css/owl.carousel.css',
       'resources/assets/user/static/assets/css/slick.css',
       'resources/assets/user/static/assets/css/plyr.css',
       'resources/assets/user/static/assets/css/magnific-popup.css',
    ], 'public/user/external.min.css')

   .styles([
       'resources/assets/user/static/css/style.css',
       'resources/assets/user/static/css/scheme/primary.css',
       'resources/assets/user/static/css/custom.css',
    ], 'public/user/custom.min.css')

   .sass('resources/assets/user/static/css/responsive.scss',
    'public/user/responsive.min.css')

    .scripts([
        'resources/assets/user/static/assets/js/jquery.min.js',
        'resources/assets/user/static/assets/js/bootstrap.min.js',
        'resources/assets/user/static/assets/js/imagesloaded.pkgd.min.js',
        'resources/assets/user/static/assets/js/visible.js',
        'resources/assets/user/static/assets/js/isotope.pkgd.min.js',
        'resources/assets/user/static/assets/js/owl.carousel.min.js',
        'resources/assets/user/static/assets/js/slick.min.js',
        'resources/assets/user/static/assets/js/plyr.js',
        'resources/assets/user/static/assets/js/jquery.countTo.js',
        'resources/assets/user/static/assets/js/jquery.countdown.min.js',
        'resources/assets/user/static/assets/js/jquery.magnific-popup.min.js',
        'resources/assets/user/static/assets/js/jquery.ajaxchimp.min.js',
        'resources/assets/user/static/assets/js/jquery.nav.js',
        'resources/assets/user/static/assets/js/jquery.sticky.js',
        'resources/assets/user/static/custom/add-subscribe.js',
        'resources/assets/user/static/custom/custom.js',
    ], 'public/user/library.min.js')

    .babel([
        'resources/assets/user/static/custom/home-subcribe.js',
    ], 'public/user/home-subcribe.js')

    // Comment Js
    .babel([
        'resources/assets/user/static/custom/course-comment.js',
    ], 'public/user/course-comment.js')

    // Comment Vue
    // .js('resources/assets/user/components/course-comment/index.js', 'public/user/course-comment.js')

    // Admin
    .js('resources/assets/admin/index.js', 'public/admin/js/index.js')

 if (mix.inProduction()) {
     mix.version();
 }
