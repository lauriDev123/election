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
        background-color: rgba(30, 11, 202, 0.742);
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
        background-color: rgba(30, 11, 202, 0.742);
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
        color: rgba(30, 11, 202, 0.742);
    }
    </style>
<body>

    <b><h1 class="title">Ajouter une région</h1></b>

    <div>
      <form method="POST" action="region_insert">
        @csrf

        <b><label for="label">Label</label></b>
        <input type="text" id="label" name="label" required>

        <b><input type="submit" value="Ajouter"></b>
      </form>
    </div>

    </body>
</html>
