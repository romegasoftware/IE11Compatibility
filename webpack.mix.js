let mix = require('laravel-mix')
let tailwindcss = require('tailwindcss')

mix.setPublicPath('dist')
   .js('resources/js/nova.js', 'js')
   .postCss('resources/sass/app.css', 'css', [
       tailwindcss('./tailwind.js'),
       require('postcss-css-variables')()
   ]);
