<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class StatusController extends Controller
{
    //
    public function status($id)
    {
        //
       
        $status='approved';
        $data=array(
            "status"=>$status,
            
            

        );


        DB::table('graduateds')->where('reg_id',$id)->update($data);

        return redirect()->back();
    }
}