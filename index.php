<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main {
            background-color: purple;
        }
        p {
            color: red;
        }
    </style>
</head>
<body>
    <main>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem eum deleniti iste placeat ad ullam illum ut! Eius sapiente ipsam quibusdam quam, culpa neque non minima odit deleniti at!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem eum deleniti iste placeat ad ullam illum ut! Eius sapiente ipsam quibusdam quam, culpa neque non minima odit deleniti at!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem eum deleniti iste placeat ad ullam illum ut! Eius sapiente ipsam quibusdam quam, culpa neque non minima odit deleniti at!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem eum deleniti iste placeat ad ullam illum ut! Eius sapiente ipsam quibusdam quam, culpa neque non minima odit deleniti at!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem eum deleniti iste placeat ad ullam illum ut! Eius sapiente ipsam quibusdam quam, culpa neque non minima odit deleniti at!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem eum deleniti iste placeat ad ullam illum ut! Eius sapiente ipsam quibusdam quam, culpa neque non minima odit deleniti at!</p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script>
        function addDarkmodeWidget() {
        new Darkmode().showWidget();
    }
    window.addEventListener('load', addDarkmodeWidget);
    const options = {
        bottom: '64px', // default: '32px'
        right: 'unset', // default: '32px'
        left: '32px', // default: 'unset'
        time: '0.5s', // default: '0.3s'
        mixColor: '#fff', // default: '#fff'
        backgroundColor: '#fff',  // default: '#fff'
        buttonColorDark: '#100f2c',  // default: '#100f2c'
        buttonColorLight: '#fff', // default: '#fff'
        saveInCookies: false, // default: true,
        label: '🌓', // default: ''
        autoMatchOsTheme: true // default: true
    }

const darkmode = new Darkmode(options);
darkmode.showWidget();
    </script>
</body>
</html>