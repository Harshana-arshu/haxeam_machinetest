<html>
<head>
</head>
<form action="{{url('teacherreg/store')}}" method="post">{{csrf_field()}}
<body>
<label>Username</label>
<input type="text" name="username"><br>
<label>Teacher Name</label>
<input type="text" name="name"><br>
<label>Password</label>
<input type="password" name="password"><br>
<button type="submit" name="submit">Submit!</button>
</body>
</form></html>