// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').setPublicPath('dist');
mix
  .options({ processCssUrls: false })
  .sass('src/app.scss', 'dist').setPublicPath('dist');