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