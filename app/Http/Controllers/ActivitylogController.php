<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activitylog;
use DB;


class ActivitylogController extends Controller
{
     public function create()
    {
       
        //$activitylog = DB::table('activitylogs')->paginate(10);
        $activitylog = activitylog::where('user_id',auth()->user()->id)->orderBy('id','desc')->paginate(10);
        
         return view('activitylog/activitylog', compact('activitylog'));
    }


}
