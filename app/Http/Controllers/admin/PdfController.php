<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Dashboard;
class PdfController extends Controller
{
    //
    public function export_pdf($id){
        

        $graduatedData=Dashboard::find($id);
    
        $pdf = \PDF::loadView('pdf',[
          
            'graduatedData'=>$graduatedData,
          
          
        ]) ->setOptions(['enable_php' => true])
        ->setPaper('A4', 'portrait');

       
      
        return $pdf->download('pdf.pdf');



       

    }
}