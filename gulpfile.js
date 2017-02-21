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
     assDir  = 'public/as/';

 elixir((mix) => {
   mix.copy(npmDir + 'jquery/dist/jquery.js', jsDir);

   mix.copy(npmDir + 'vue/dist/vue.js', jsDir);
   mix.copy(npmDir + 'axios/dist/axios.js', jsDir);

   mix.copy(npmDir + 'tinymce/tinymce.js', jsDir);

   mix.copy(npmDir + 'bootstrap/dist/css/bootstrap.css', cssDir);
   mix.copy(npmDir + 'bootstrap/dist/js/bootstrap.js', jsDir);

   mix.copy(npmDir + 'font-awesome/css/font-awesome.css', cssDir);

   mix.copy(npmDir + 'select2/dist/js/select2.js', jsDir);
   mix.copy(npmDir + 'select2/dist/css/select2.css', cssDir);

   mix.copy(npmDir + 'parsleyjs/dist/parsley.js', jsDir);

   mix.copy(npmDir + 'chart.js/dist/Chart.bundle.js', jsDir);



// The Scripts
   mix.scripts([
     'vue.js',
     'axios.js',
   ],'public/js/my-vue.js' );

   mix.scripts([
     'tinymce.js',
     'parsley.js',
     'id.js',
     'select2.js',
   ],'public/js/form.js' );

   mix.scripts([
     'Chart.bundle.js'
   ],'public/js/chart.js' );


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
