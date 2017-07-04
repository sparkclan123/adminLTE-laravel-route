<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AuthController extends Controller
{
    public function getLogin(){
        return view('auths.login');
    }

    public function postLogin(){
      $input = request()->except(['_token']); 

      if (auth()->attempt($input)){
             session()->flash('message','Delete sucess');

          return redirect()-> intended('/');
      }else{

           session()->flash('message','ใส่ E-mail Password ให้ถูกต้อง');
          return redirect('login');
      }
    
    }
   
    public function logout(){
        auth()->logout();
 
        return redirect('login');

    }

    public function register(){
        return view('auths.register');
        //return 'register';
    }

    public function store(Request $request)
    {
                //$input = request()->email;
                //return $input;
 $rules = [
                    'name'=> 'required|string|max:255|min:3',
                    'email'=> 'required|string|max:255|min:3',
                    'password'=> 'required|string|min:6',
                    'retype_password'=> 'required|string|min:6'
                   
                ];
                
                $name = request('name');
                $email = request('email');
                $password = bcrypt(request('password'));
                $Rpassword = request('password');
                $cretype_password = request('retype_password');
                $retype_password = bcrypt(request('retype_password'));
              
                $this->validate($request, $rules);
                
                  if($Rpassword==$cretype_password){
                DB::table('users')->insert([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password
                  

                ]);
               


                return redirect('login');
                  }else{return 'กรุณากรอกรหัสผ่านให้ตรงกัน';
                  }

           


            

    }
}
