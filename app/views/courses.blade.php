<table>
<th>
<td>
Nombre
</td>
<td>
Descripcion
</td>
</th>
@foreach($courses as $course)
<tr>
<td>{{$course->name}}</td><td>{{$course->description}}</td>
</tr>
@endforeach
</table>