<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepositController extends Controller
{
    
    public function create()
    {
         //return view('pages/balance/deposit');
         return view('pages/balance/deposit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
         $rules = [
            'username'=> 'required',
            'balance'=> 'required', 
            'bankdeposit'=> 'required',
            'accountnumberdeposit'=> 'required',
            'accontnamedeposit'=> 'required',
            'datetime'=> 'required',
            'channeldeposit'=> 'required',
            'tel'=> 'required',
            'opinion' => 'required'
        ];

        $input = request()->except(['_token']);
     //validate คือการกำหนดข้อมูลที่จะทำการบันทึกให้มีเงื่อนไขในการกรอก
        $this->validate($request, $rules);

    try{
    DB::table('deposit')
        ->insert($input);
        

    return redirect('/pages/balance/deposit');
    }catch(Exception $d){
        abort(500);
    }}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $deposit = DB::table('deposit')
        ->paginate(5);
        //return view ('deposit.index', compo);
        return view ('pages/balance/list', compact('deposit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deposit = DB::table('deposit')
        ->where('id', $id)
        ->first();

    return view('pages/balance/edit',compact('deposit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $rules = [
                    'username'=> 'required',
                    'balance'=> 'required',
                    'bankdeposit'=> 'required',
                    'accountnumberdeposit'=> 'required',
                    'accontnamedeposit'=> 'required',
                    'datetime'=> 'required',
                    'channeldeposit'=> 'required',
                    'tel'=> 'required',
                    'opinion' => 'required'
                ];

                $input = request()->except(['_token','_method']);
            //validate คือการกำหนดข้อมูลที่จะทำการบันทึกให้มีเงื่อนไขในการกรอก
                $this->validate($request, $rules);

            try{ 
            DB::table('deposit')
                ->where('id',$id)
                ->update($input);
                

            return redirect('pages/balance/list');
            }
            catch(Exception $d){
                abort(500);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

