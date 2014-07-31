<table>
<tr>
<td>
Nombre
</td>
<td>
ID
</td>
</tr>
@foreach($users as $user)
<tr>
<td>{{$user->name}}</td><td>{{$user->id}}</td>
</tr>
@endforeach

</table>