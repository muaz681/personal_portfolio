<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class ApplyController extends Controller
{

    //index
    public function index(){

        $applys = Apply::all();
        return view('frontend.apply.index', compact('applys'));

    }

    // store
    public function store(Request $request){

        Apply::create([
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
            'created_at' => Carbon::now(),
        ]);

        return view('welcome');

    }

    // edit
    public function edit($id){
        $apply = Apply::findOrFail($id);
        return view('frontend.apply.edit', compact('apply'));

    }


}
