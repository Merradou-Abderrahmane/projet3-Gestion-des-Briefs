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
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/student.css')}}">

    <title>Ajouter Brief</title>
</head>
<body>
    <h1 id="add-title">➕ Ajouter Brief</h1>
    <form  class="form" action="add" method="POST">
        @csrf
        <input type="text" placeholder="Nom de brief" class="add-box" name="brief_nom"><br>
        <input type="datetime-local" name="date_debut"><br>
        <input type="datetime-local" name="date_fin"><br>
        <button id="button-add" type="submit">Ajouter</button>
    </form>
</body>
</html>