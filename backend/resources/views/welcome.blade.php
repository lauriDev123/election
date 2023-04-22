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
                background-image: url("/img/bg-voting.png");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
            }
            .title{
                text-align: center;
                color: white;
                margin-top: 25%;
            }
        /*Navbar*/
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 15%;
            background-color: #fdf7f7;
            position: fixed;
            height: 100%;
            overflow: hidden;

            }

            li a {
            display: block;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            background-color: rgba(57, 46, 214, 0.832);
            margin-bottom: 20px;
            }

            li a:hover{
            background-color: rgba(57, 46, 214, 0.44);
            color: white;
            }
            img{
                height: 50px;
                width: 50px;
                margin-left: 15px;
                margin-bottom: 20px;
            }
            /*Dropdown*/
            .dropdown-content {
            display: none;
            margin-left: 40px;
            }

            .dropdown-content a {
                background-color: #f1f1f1;
                color: rgba(57, 46, 214, 0.832);
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {

                color: rgba(57, 46, 214, 0.832);
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>
    </head>
    <body class="antialiased">
        <!--Navbar-->
        <br>
        <ul>
            <img src= "{{url("/img/logo-vote.png")}}" alt="logo">
            <li class="dropdown">
                <strong><a href="/">Accueil</a></strong>
            </li>
            <li class="dropdown">
                <strong><a href="#">Regions</a></strong>
                <div class="dropdown-content">
                    <strong><a href="/region_create">Ajouter</a></strong>
                    <strong><a href="/region_list">Consulter</a></strong>
                  </div>
            </li>

            <li class="dropdown">
                <strong><a href="#" class="dropbtn">Participants</a></strong>
                <div class="dropdown-content">
                    <strong><a href="/participant_create">Ajouter</a></strong>
                    <strong><a href="participant_list">Consulter</a></strong>
                  </div>
            </li>
          </ul>
          <h1 class="title">Let's vote here !</h1>

    </body>
</html>

