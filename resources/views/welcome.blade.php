<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>           
        </style>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
            <hr>
            <router-link :to="{ name : 'home' }">Home</router-link>
            <router-link :to="{ name : 'about' }">About </router-link>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
