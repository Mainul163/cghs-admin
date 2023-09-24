<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Dashboard extends Model
{
    use HasFactory;
    protected $table = 'graduateds';
    public static function getAllsUsers(){
     $result=DB::table('graduateds')->select('reg_id','graduated_name','batch','mobile_number','blood_group','t_shirt','profession','profession_institute','designation','guest','total','bkash','transaction_id','status','address','date')->get()->toArray();
     return $result;
    }
}