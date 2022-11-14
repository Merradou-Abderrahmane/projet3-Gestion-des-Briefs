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

@include('includes.header')
<h1>All student</h1>
<table>
    </thead>
    <tbody>
        @foreach ($apprenants as $apprenant )
        <tr>
            <td>{{$apprenant->id}}</td>
            <td>{{$apprenant->nom_apprenant}} {{$apprenant->prenom_apprenant}}</td>
            <td>
                <form action="/brief/assignBrief" method="post">
                    @csrf
                    <input type="hidden" value="{{$apprenant->id}}" name="apprenant_id">
                    <input type="hidden" value="{{$brief->id}}" name="brief_id">
                    <input type="submit" value="+">
                </form>
            </td>
            <td>-</td>
        </tr>
        @endforeach
    </tbody>
</table>
<button>
    <a href="/editBrief">Back</a>
</button>
</body>