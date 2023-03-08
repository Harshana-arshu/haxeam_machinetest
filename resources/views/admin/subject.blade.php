<!DOCTYPE html>
<html>
<body>
<form action="{{url('sub_store')}}" method="post">{{csrf_field()}}
<label>
Subject</label>
<input type="text" name="sub" placeholder="enter the subject">
<button type="submit" >Submit!</button>
</form>
</body></html>