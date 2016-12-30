const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

 var npmDir  = 'node_modules/',
     jsDir   = 'resources/assets/js',
     cssDir  = 'resources/assets/css';

 elixir((mix) => {
   mix.copy(npmDir + 'jquery/dist/jquery.js', jsDir);

   mix.copy(npmDir + 'vue/dist/vue.js', jsDir);
   mix.copy(npmDir + 'axios/dist/axios.js', jsDir);

   mix.copy(npmDir + 'tinymce/tinymce.js', jsDir);

   mix.copy(npmDir + 'bootstrap/dist/css/bootstrap.css', cssDir);
   mix.copy(npmDir + 'bootstrap/dist/js/bootstrap.js', jsDir);

   mix.copy(npmDir + 'font-awesome/css/font-awesome.css', cssDir);

// The Scripts
   mix.scripts([
     'vue.js',
     'axios.js',
   ],'public/js/my-vue.js' );

   mix.scripts([
     'tinymce.js',
   ],'public/js/editor.js' );

 });

 elixir(function(mix) {
    mix.scripts([
      'jquery.js',
      'bootstrap.js'
    ],'./public/js/app.js'
    );

    mix.styles([
       'bootstrap.css',
       'font-awesome.css'
   ], './public/css/app.css'
   );


});
