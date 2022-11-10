<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Edit Brief</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/student.css')}}">
</head>
<body>
    <h1 id="add-title"> Modifier Brief</h1>
    <form class="form"  action="/update/{{ $brief->id }}" method="POST">
        @csrf
        <input type="text" class="add-box" name="brief_nom" value="{{$brief->brief_nom}}"><br>
        <input type="datetime-local" name="date_livraison" value="{{$brief->date_livraison}}"><br>
        <input type="datetime-local" name="date_recuperation" value="{{$brief->date_recuperation}}"><br>
        <button id="button-add" type="submit">Editer</button>
    </form>
    <h1 id="add-title">👨🏻‍🎓 Gestion des taches</h1>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Gestion des Taches <b> Solicode</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" id="search-input" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nom de tache </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="results">
                    @foreach ($taches as $tache)
                    <tr>
                        <td>{{$tache->nom_tache}}</td>
                        <td>
                            <a href={{"/tache/edit/".$tache['id']}}  class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href={{"/tache/delete/".$tache['id']}} class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                {{-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div> --}}
                <a href={{url("tache/addTache/")."/".$brief->id}} ><i class="fa-regular fa-square-plus"></i>+ Ajouter Tache </a>
            </div>
        </div>
    </div>  
</div>   
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{ asset('js/tache.js') }}"></script>
</body>
</html>