<html>
<head>
</head>
<form action="{{url('mark/store')}}" method="post">{{csrf_field()}}
<body>

<table>
<input type="hidden" name="id" value="{{$student->id}}">
<label>{{$student->student_name}}</label>
@foreach ($subject as $sub)
<tr>
 <th>{{$sub->name}}</th> 
 <th><input type="text" name="subject[{{$sub->id}}]" ></th>  
 </tr>
@endforeach

</table>
<button type="submit" >Submit</button>

</body>
</form></html>