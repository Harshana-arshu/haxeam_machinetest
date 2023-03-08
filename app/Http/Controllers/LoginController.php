<?php

namespace App\Http\Controllers;
use App\Models\Login;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DB;

class LoginController extends Controller
{
    public function tchrslogin()
    {
        try{
            return view('login.tchrs');
        }
        catch (Exception $e) {
            return $e;
    }
    }
    
    public function login(Request $request)
  {
  
  $this->validate($request, [
    'username'=>'required',
    'password'=>'required'
  ]);
    try{
    
    
        $username=$request->input('username');
        $pass=$request->input('password');

        $login=Login::where('username',$username)->first();
       
      
        if($login)
        { 
          
            $password =$login->password; 
            if($password==$pass)
            {       
                $request->session()->put('user_id',$login->id);
                $request->session()->put('username',$username);
            return redirect('student_create');
            }
            else{
                $request->session()->flash('error_login','Invalid Password');
                return back();
            }
        }
        else{
          
            $request->session()->flash('error_login','Invalid username/ Password');
            return back();
        }

        
          
         
    }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function create_tchrslogin()
    {
        try{
            return view('login.reg');
        }
        catch (Exception $e) {
            return $e;
    }
    }
    public function techearreg_store(Request $request)
    {
        try{
            DB::transaction(function () use ($request)  {
                $login=new Login;
                $login->username=$request->input('username');
                $login->teacher_name=$request->input('name');
                $login->password=Crypt::encryptString($request->password);
                $login->save();
            });
           return redirect('teacherreg');
        }
        catch (Exception $e) {
            return $e;
    }
    }
}
