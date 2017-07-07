<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class WithdrawController extends Controller
{
     public function create() 
    {
        
         return view('pages/withdraw/withdraw');
    }


     public function store(Request $request)
    {
         $rules = [
            'username'=> 'required',
            'balance'=> 'required', 
            'bankwithdrawal'=> 'required',
            'accountnumberwithdrawal'=> 'required',
            'accountnamewithdrawal'=> 'required',
            'datetime'=> 'required',
            'tel'=> 'required',
            'opinion' => 'required'
        ];

        $input = request()->except(['_token']);
     //validate คือการกำหนดข้อมูลที่จะทำการบันทึกให้มีเงื่อนไขในการกรอก
        $this->validate($request, $rules);

    try{
    DB::table('withdraw')
        ->insert($input);
        

    return redirect('/pages/withdraw/withdraw');
    }catch(Exception $d){
        abort(500);
    }}


    public function show()
    {
       $withdraw = DB::table('withdraw')
        ->paginate(5);
      
        return view ('pages/withdraw/list', compact('withdraw'));
    }


}
