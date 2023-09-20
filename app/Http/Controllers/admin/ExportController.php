<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Dashboard;
use App\Exports\DasboardExport;
use CSV;
class ExportController extends Controller
{
    //
    public function exportCSV(){

        return CSV::download(new DasboardExport,'user-record.csv');


    }
}