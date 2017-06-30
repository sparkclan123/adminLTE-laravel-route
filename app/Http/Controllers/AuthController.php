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
          return redirect()-> intended('/');
      }else{
          abort(401);
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

                $name = request('name');
                $email = request('email');
                $password = bcrypt(request('password'));
                $Rpassword = request('password');
                $cretype_password = request('retype_password');
                $retype_password = bcrypt(request('retype_password'));
              
                //   $this->validate($request, $rules);
                  if($Rpassword==$cretype_password){
                DB::table('users')->insert([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password
                  

                ]);
               


                return redirect('login');
                  }else{return "รหัสผ่านไม่ตรงกัน";
                  }

           


            

    }
}
