<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class VideoController extends Controller
{
    

    // create
    public function create(){

        return view('admin.video.create');

    }

    //index
    public function index(){
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }


    public function store(Request $request){

        Video::create([
            'link' => $request->link,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('video.index');

    }


    // edit
    public function edit($id){
        $video = Video::findOrFail($id);
        return view('admin.video.edit', compact('video'));

    }


    // update
    public function update(Request $request){

       $id = $request->id;

       Video::findOrFail($id)->update([
            'link' => $request->link,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('video.index');

    }

    // delete
    public function delete($id){

        Video::findOrFail($id)->delete();

        return back();

    }


}
