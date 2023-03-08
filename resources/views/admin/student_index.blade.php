<html>
<head></head>
<table>
<thead>
<tr>
<th>Class</th>
<th>Division</th>
<th>Name</th>
<th>Teacher Name</th>
<th>Photo of Student</th>
<th>Action</th></tr></thead>
@foreach($student as $stud)
<tbody>
@foreach($stud->class as $org )
<td >{{$org->class_name}}</td>
@endforeach
@foreach($stud->division as $org )
<td >{{$org->division_name}}</td>
@endforeach
<td>{{$stud->student_name}}</td>
@foreach($stud->teacher as $org )
<td >{{$org->name}}</td>
@endforeach
<td><img alt="single" src="{{url('public/uploads/'.$stud->photo)}}" class="img-fluid"></td>
<td><a href="{{url('mark/create/'.$stud->id)}}">Marks</a></td></tbody>
@endforeach</table>
</html>