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
   mix.copy(npmDir + 'vue/dist/vue.js', jsDir);
   mix.copy(npmDir + 'axios/dist/axios.js', jsDir);
   mix.copy(npmDir + 'tinymce/tinymce.js', jsDir);

   mix.scripts([
     'vue.js',
     'axios.js',
   ],'public/js/vue-vendor.js' );

   mix.scripts([
     'tinymce.js',
   ],'public/js/editor.js' );


 });
