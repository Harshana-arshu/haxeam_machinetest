<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function adminlogin()
    {
        try{
            return view('login.admin');
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

        $login=Admin::where('username',$username)->first();
       
      
        if($login)
        { 
          
            $password =$login->password; 
            if($password==$pass)
            {       
                $request->session()->put('user_id',$login->id);
                $request->session()->put('username',$username);
            return redirect('index');
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
}
