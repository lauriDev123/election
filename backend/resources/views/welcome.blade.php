<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .title{
                text-align: center;
                color: rgba(30, 11, 202, 0.742);
            }
            .btn-region{
                width: 50%;
                background-color:rgba(30, 11, 202, 0.742);
                color: white;
                padding: 14px 20px;
                margin-left: 25%;
                margin-right: 25%;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>
    </head>
    <body class="antialiased">
        <b><h1 class="title">My first project</h1></b>
        <br>
        <b><a href="/region/create"><button class="btn-region" type="submit">Nouvelle region</button></a></b>
    </body>
</html>
