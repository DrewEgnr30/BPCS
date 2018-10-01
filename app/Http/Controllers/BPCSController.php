<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BPCSController extends Controller
{
    public function showunit($id) 
    {
        // return \DB::table('UTH Inventory')->where('Order Number','=','250042')->get();'
        $unit = \DB::table('AIM_All_Stock')->where('grp','=',$id)->orderBy('Description')->get();
        return $unit;
    }

}
