<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
{
  public function indexlist()
  {
     $users = DB::table('users')
        ->paginate(5);
        //return view ('deposit.index', compo);
        return view ('pages/member/list', compact('users'));

  }

  

    public function registermember(){
        return view('pages/member/add');
        //return 'register';
    }

    public function storemember(Request $request)
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
               


                return redirect('/pages/member/add');
                  }else{
                      return "รหัสผ่านไม่ตรงกัน";
                  }

          

             

    }
     public function edit()
           {
               
               return view('/pages/member/edit');
           }
    
    public function updateedit() 
 	{ 
 		$this->validate( request(), [ 
             'name' => 'required|string|max:255|min:3', 
             'email' => 'required|string|max:255|min:3', 
           
             'password' => 'required|string|min:6|confirmed', 
 			]); 
  
 		$user = auth()->user(); 
  
 		$user->name = request('name'); 
        $user->email = request('email'); 
 		$user->password = bcrypt( request('password')); 
 		$user->save(); 
  
 		return back()->with('status','เเก้ไขเรียบร้อย'); 
    }


    public function destroy($id)
    {
       try{
            DB::table('users')
            ->where('id',$id)
            ->delete();

            

            return redirect('/pages/member/list');
        
        }catch (Exception $u){
            abort(500);
        }
    }

}


