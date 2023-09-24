<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Dashboard;
use App\Exports\DasboardExport;
use CSV;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $brotherhood=DB::table('graduateds')->get();
        $brotherhood=Dashboard::all();
        return view('dashboardList',compact('brotherhood'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       



        $editData = DB::table('graduateds')->where('reg_id',$id)->first();;

        return view('edit')->with(compact('editData'));
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
        //
       
        $total=($request->guest*700)+1020;

        $data=array(
           
            "graduated_name"=>$request->graduated_name,
            "batch"=>$request->batch ,
           
            "mobile_number"=>$request->mobile_number,
            "blood_group"=>$request->blood_group,
            "batch"=>$request->batch ,
            "t_shirt"=>$request->t_shirt ,
            "profession"=>$request->profession ,
            "profession_institute"=>$request->profession_institute ,
            "designation"=>$request->designation ,
            "guest"=>$request->guest ,
            "total"=>$total ,
            "bkash"=>$request->payment ,
            "transaction_id"=>$request->transaction_id ,
            "address"=>$request->address ,
        );
        
            DB::table('graduateds')->where('reg_id',$id)->update($data);
            return redirect()->route('dashboardList.index')->with('success','successfully updated');
       
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