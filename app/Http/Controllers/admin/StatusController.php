<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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


        DB::table('graduateds')->where('id',$id)->update($data);

        return redirect()->back();
    }
}