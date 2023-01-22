<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Research;
 use Barryvdh\DomPDF\Facade\Pdf;


class ItemController extends Controller
{
    // public function pdfview(Request $request)
    // {
    //     $items = Research::all("items");
    //     view()->share('items',$items);


    //     if($request->has('download')){
    //         $pdf = PDF::loadView('pdfview');
    //         return $pdf->download('pdfview.pdf');
    //     }


    //     return view('pdfview');
    // }
    //

            public function pdfview($id){
                $research = Research::findOrFail($id);
                $pdf = Pdf::loadView('pdfview', compact('research'));
                view('pdfview', compact('research'));
                return $pdf->download('pdfview.pdf');
           }
    //
}
