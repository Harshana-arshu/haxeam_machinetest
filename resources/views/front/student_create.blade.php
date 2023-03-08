<html>
<head></head>
<form action="{{url('student_store')}}" method="post">{{csrf_field()}}
<body>
<h1>Student Registration</h1>
 <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                    <div class="col-sm-3 col-12">
                                                <label class="control-label" for="location">Class</label>
                                            </div>
                                                        <select id="classes" name="class_id" class='select2'>
                                                        <option>Select class</option>
                                                        @foreach($class as $orgs)
                                                        <option value="{{$orgs->id}}">{{$orgs->class}}</option>
                                                        @endforeach
                                                     </select>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="location">Division</label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                        <div class="custom-select">
                                                        <select id="div" name="division_id">
                                                        <option value="select option">Select Division</option></select></div>

                                                        
                                                        

                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                                 <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Student Name</label>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <input type="textarea" id="add-title" name="student_name"class="form-control" placeholder="Enter Student Name">
                                                </div>
                                            </div>
                                        </div>

                                     </div>
                                     
                                                  <div class="form-group">
                                                    <div class="custom-select">
                                                    <div class="col-sm-3 col-12">
                                                <label>Teacher Name</label>
<select name="teacher_id">
@foreach($student as $orgs)
<option value="{{$orgs->id}}">{{$orgs->teacher_name}}</option>
@endforeach
</select>
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <label class="control-label" for="add-title">Upload Picture</label>
                                            </div>
                                            <input type="file" id="img-upload1" name="image" class="form-control"><br>
                                            <button type="submit">Submit!</button>
                                                
                                         

                                       </body>
                                       </form>
                                        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                                       
<script type="text/javascript">//ajax 


$(document).ready(function(){
    
$('#classes').change(function(){
var classes=$(this).val();
console.log(classes);
$.ajax({
         type:"GET",
         url:"{{url('/get_division')}}?classes="+classes,
         success:function(res){  

console.log(res);
if(res){
   $("#div").empty();

              $("#div").append('<option value="">Select division</option>');
              $.each(res, function (id, value)  
              {  
console.log(value);
                   $("#div").append('<option style="text-transform: uppercase;" value="'+id+'">'+value+'</option>'); 
              });  
         
          }else{
             $("#div").empty();
          }
         }
       });

});
 });
   
 </script>
 </html>