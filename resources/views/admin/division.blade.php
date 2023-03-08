<!DOCTYPE html>
<html>
<head></head>
<body>
<div class="col-xl-12 col-md-12 col-sm-12 col-12">
           
         
          
        </div>

<form   action="{{url('division_store')}}" method="post"   >
                          {{csrf_field()}}


<label>Class</label>
<select name="class">
@foreach($div as $orgs)
<option value="{{$orgs->id}}">{{$orgs->class}}</option>
@endforeach
</select>
 
<br><br>
<label>Division</label>
<input type="text" name="division" >
<input type="submit"value="submit">
</form>
</body>
</html>