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


$name=$request->name;
$email=$request->email;
$msg=$request->msg;


        $details = [
            'title' => [$name],
            'body' => [$name,$email,$msg]
        ];
    // return new \App\Mail\MyTestMail($details);
        \Mail::to('muaz68128@gmail.com')->send(new \App\Mail\MyTestMail($details));

Apply::create([
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back();
        return view('welcome');

    }

    // edit
    public function edit($id){
        $apply = Apply::findOrFail($id);
        return view('frontend.apply.edit', compact('apply'));

    }


}
