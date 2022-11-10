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
    <link rel="stylesheet" href="{{asset('css/student.css')}}">
    <title>Ajouter Tache</title>
</head>
<body>
    <div class="addStudent-page">
        <div class="form">
          <form action="/tache/add" method="POST" class="login-form">
            @csrf
             <input type="text" placeholder="Nom de la tache" name="nom_tache"><br> <br>
             <input type="datetime-local" name="date_debut"><br> <br>
             <input type="datetime-local" name="date_fin"><br> <br>
              <input type="text" placeholder="Description" name="description"><br> <br>
             <input type="hidden" value="{{$id}}"  name="id">
            <button type="submit">add</button>
          </form>
        </div>
      </div>
</body>
</html>      