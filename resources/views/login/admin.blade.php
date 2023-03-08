<html>
<head>
</head>
<form action="{{url('adminlogin/store')}}" method="post">{{csrf_field()}}
<body>
<label>Username</label>
<input type="text" name="username"><br>
<label>Password</label>
<input type="password" name="password"><br>
<button type="submit" name="submit">Login!</button>
</body>
</form></html>