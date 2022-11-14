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
          <form action="/apprenant/update/{{ $apprenant->id }}" method="POST" class="login-form">
            @csrf
             <input type="text" placeholder="Nom apprenant" value="{{$apprenant->nom_apprenant}}" name="nom_apprenant"><br> <br>
             <input type="text" placeholder="Prenom apprenant" value="{{$apprenant->prenom_apprenant}}" name="prenom_apprenant"><br> <br> 
             <input type="text" placeholder="Email" value="{{$apprenant->email}}" name="email"><br> <br>
             <button type="submit">edit</button>
            </form>
        </div>
      </div>
</body>
</html>      