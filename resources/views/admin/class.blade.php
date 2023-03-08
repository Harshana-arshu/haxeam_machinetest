<!DOCTYPE html>
<html>
<body>
<form action="{{url('class_store')}}" method="post">{{csrf_field()}}
<label>
class</label>
<input type="text" name="name" placeholder="enter the classes">
<button type="submit" >Submit!</button>
</form>
</body></html>