<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Region</title>
</head>
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

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 50%;
        background-color: rgba(57, 46, 214, 0.832);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 25%;
        margin-right: 25%;

    }

    input[type=submit]:hover {
        background-color: rgba(30, 11, 202, 0.44);
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 40px;
        margin-left: 30%;
        margin-right: 30%;
    }
    .title{
        text-align: center;
        color: rgba(30, 11, 202, 0.832);
    }
    </style>
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
    <h1 class="title">Modifier la région</h1>

    <div>
      <form method="POST" action="{{route('add')}}">
        @csrf

       <strong><label for="label">Label</label></strong>
        <input type="text" id="label" name="label" required>

        <strong><input type="submit" value="Modifier"></strong>
      </form>
    </div>

    </body>
</html>
