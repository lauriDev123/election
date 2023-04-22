<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
             body{
                font-family: 'Nunito', sans-serif;
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
            #participant {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            margin-left: 20%;
            margin-right: 5%;
            margin-top: 80px;
            }

            #participant td, #participant th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #participant tr:nth-child(even){background-color: #f2f2f2;}


            #participant tr:hover {background-color: #ddd;}

            #participant th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgba(30, 11, 202, 0.832);
            color: white;
            width: 4%;
            }

            .btn-delete{
                height: 30px;
                width: 50px;
                background-color: rgba(255,0,0,0.832);
                color: white;
                border: none;
                margin-left: 20%;
                margin-right: 10%;
            }
            .btn-edit{
                height: 30px;
                width: 50px;
                background-color: rgba(30, 11, 202, 0.832);
                color: white;
                border: none;
                margin-right: 20%;
            }
            .btn{
                display: flex;
                justify-content: space-between;
            }
        </style>


    </head>
    <body>
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
                    <strong><a href="/participant_list">Consulter</a></strong>
                </div>
            </li>
        </ul>

        @if($participant->count() > 0 )
            <table id="participant">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>CNI</th>
                    <th>Age</th>
                    <th>Sexe</th>
                    <th>Statut</th>
                    <th>Email</th>
                    <th>Etat</th>
                    <th>Telephone</th>
                    <th>Region</th>
                    <th>Vote</th>
                    <th>Action</th>
                </tr>
                    @foreach ($participant as $p)
                        <tr>
                            <td> {{$p->id}} </td>
                            <td> {{$p->nom}} </td>
                            <td> {{$p->num_cni}} </td>
                            <td> {{$p->age}} </td>
                            <td> {{$p->sexe}} </td>
                            <td> {{$p->status}} </td>
                            <td> {{$p->email}} </td>
                            <td> {{$p->etat}} </td>
                            <td> {{$p->telephone}} </td>
                            <td> {{$p->label}} </td>
                            <td> {{$p->dateVote}} </td>
                            <td class="btn">
                                <b><a href="/participant_delete/{{$p->id}}"><button class="btn-delete">Delete</button></a></b>
                                <b><a href="/participant_edit"><button class="btn-edit">Edit</button></a></b>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endif
        <b><a href="/"><button>Acceuil</button></a></b>
    </body>
</html>
