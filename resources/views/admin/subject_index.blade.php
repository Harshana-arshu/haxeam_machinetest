<html>
<head></head>
<body>
<table>
<thead>

<th>SI no.</th>
<th>Name</th>
<th> Action</th>

				</tr></thead>
@foreach($sub as $subs)
<tbody>
<td>{{$subs->id}}</td>
<td>{{$subs->name}}</td>
<td><a href="{{url('delete/'.$sub->id)}}"></td></tbody>
                         @endforeach</table>
</body>
</html>