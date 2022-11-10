<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Ajouter Brief</title>
</head>
<body>
    <h1 id="add-title">➕ Ajouter Brief</h1>
    <form  action="add" method="POST">
        @csrf
        <label for="briefName"> Nom de brief</label> <input type="text" class="add-box" name="brief_nom"><br>
        <button id="button-add" type="submit">Ajouter</button>
    </form>
</body>
</html>