<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Division;
use App\Models\Student;
use App\Models\Mark;
use App\Models\Login;
use App\Http\Controllers\Redirect;
use DB;
use File;

class AdminController extends Controller
{
    public function class_index()
    {
        try{
            return view('admin.class');
        }
        catch (Exception $e) {
            return $e;
    }
    }
    public function class_store(Request $request)
    {
        try{
            DB::transaction(function () use ($request)  {
                $class=new Classes;
                $class->class=$request->input('name');
                $class->save();
            });
           return redirect('index');
        }
        catch (Exception $e) {
            return $e;
    }
    }
    public function division()
    {
        try{
            $div=Classes::get();
            return view('admin.division',array('div'=>$div));
        }
        catch (Exception $e) {
            return $e;
    }
    }
    public function division_store(Request $request)
    {
       
        
        try{
            DB::transaction(function () use ($request)  {
                
                $div=new Division;
                $div->divisions = $request->input('division');
                $div->class_id = $request->input('class');
                $div->save();
                     
    });

    return redirect('division');
     } catch (\Exception $e) {


return $e->getMessage();
}

        }
    public function subject_index()
{
    try{
        $sub=Subject::get();
        return view('admin.subject_index',['sub'=>$sub]);
    }
    catch (Exception $e) {
        return $e;
}
}





public function subject_store(Request $request)
{
   
    
    try{
        DB::transaction(function () use ($request)  {
            
            $sub=new Subject;
            $sub->name = $request->input('sub');
            
            $sub->save();
                 
});

return redirect('sub');
 } catch (\Exception $e) {


return $e->getMessage();
}

    }
    // public function delete()
    //      {
    //          DB::transaction(function() {
    //              Subject::where('id',$sub->id)->delete();
    //      });
    //    }
 
   
    public function student()
        {
            try{
                $student=Student::with('class','teacher','division')->get();
                return view('admin.student_index',['student'=>$student]);
            }
            catch (Exception $e) {
                return $e;
        }
        }
        public function student_create()
        {
            try{
                $class=Classes::get();
                $student=Login::get();
                return view('front.student_create',['class'=>$class,'student'=>$student]);
            }
            catch (Exception $e) {
                return $e;
        }
        }
        public function student_store(Request $request)
        {
            try{
                if( $file = $request->file('image') ) {
                       
                    $path = 'uploads';
                    $url = $this->file($file,$path,2000,2000);
                }else{$url='defalut.jpg';}
                DB::transaction(function () use ($request,$url)  {
            
                    $student=new Student;
                    $student->class_id = $request->input('class_id');
                    $student->division_id = $request->input('division_id');
                    $student->student_name = $request->input('student_name');
                    $student->teacher_id = $request->input('teacher_id');
                    $student->photo=$url;
                    $student->save();
                         
        });
        redirect('student');
            }
            catch (Exception $e) {
                return $e;
        }
        }
        public function get_division(Request $request)
        {
          
            $classes=$request->classes;
            try {
                $division= Division::where("class_id",'=',$classes)
                ->pluck('divisions','id');
                return response()->json($division);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function mark_index()
    {
        $mark=Mark::with('student','subject')->get();
        return view('mark.index',['mark'=>$mark]);
    }
        public function marks($id)
        {
            try{
                
                $subject=Subject::get();
                $student=Student::find($id)->first();
                // $mark=Mark::join('table_subject','table_subject.id','=','mark.subject_id')->get();
                return view('mark.create',['subject'=>$subject,'student'=>$student]);
            }
            catch (\Exception $e) {
                return $e->getMessage();
            }
        }
        public function mark_store(Request $request)
        {
            // return $request->all();
            try{
                DB::transaction(function ()use($request){
                    foreach($request->input('subject') as $key=>$val)
                    {
                    $mark=new Mark;
                    $mark->student_id=$request->input('id');
                    $mark->subject_id=$key;
                    $mark->marks=$request->input('subject')[$key];
                    $mark->save();
                    }
                
                });
                return redirect('mark_index');


            }
                catch (\Exception $e) {
                    return $e->getMessage();
                }
            }
        }
        
    


