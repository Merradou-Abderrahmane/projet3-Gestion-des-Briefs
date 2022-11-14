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
<link rel="stylesheet" href="{{asset('css/promotion.css')}}">
</head>
<body>
@include('includes.header')
<h1 style="text-align:center" id="Assigner"> Assigner le brief aux apprenants</h1>
<table class="table table-striped table-hover">
<table style="cente">
    </thead>
    <tbody class="center">
        @foreach ($apprenants as $apprenant )
            <td> {{$apprenant->prenom_apprenant}}</td>
            <td>
                <form action="/brief/assignBrief" method="post">
                    @csrf
                    <input type="hidden" value="{{$apprenant->id}}" name="apprenant_id">
                    <input type="hidden" value="{{$brief->id}}" name="brief_id">
                    <input id="positive" type="submit" value="+">
                </form>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("form").delegate("input", "click",function(){
    $("input").css("background-color", "pink");
  });
});
</script>