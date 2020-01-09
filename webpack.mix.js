let mix = require("laravel-mix");

mix.setPublicPath("dist")
    .js("resources/js/field.js", "js")
    .copy("vendor/van-ons/laraberg/public/css/laraberg.css", "dist/css/just-read-the-instructions.css")
    .copy("vendor/van-ons/laraberg/public/js/laraberg.js", "dist/js/just-read-the-instructions.js")
    .copyDirectory("resources/js/deps", "dist/js/deps");
