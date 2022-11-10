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
    <title>Modifier Apprenant</title>
</head>
<body>
    <div class="addStudent-page">
        <div class="form">
          <form action="/tache/update/{{ $tache->id }}" method="POST" class="login-form">
            @csrf
             <input type="text" value="{{$tache->nom_tache}}" name="nom_tache"><br> <br>
              {{-- edit date and description --}}
              <input type="datetime-local" value="{{$tache->date_debut}}" name="date_debut"><br> <br>
              <input type="datetime-local" value="{{$tache->date_fin}}" name="date_fin"><br> <br>
              <input type="text" placeholder="Description" value="{{$tache->description}}" name="description"><br> <br>
            <button type="submit">update</button>
             {{-- <input type="hidden" value="{{$id}}"  name="id"> --}}
            </form>
        </div>
      </div>
</body>
</html>      