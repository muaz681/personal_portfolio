<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class GalleryController extends Controller
{


    // create
    public function create(){

        return view('admin.gallery.create');

    }

    //index
    public function index(){

        $gallerys = Gallery::all();
        return view('admin.gallery.index', compact('gallerys'));

    }


    public function store(Request $request){

        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'gallery'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(444,350)->save('uploads/gallery/'.$imageName);
            $saveUrl = 'uploads/gallery/'.$imageName;

            Gallery::create([
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('gallery.index');

    }


    // edit
    public function edit($id){

        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));

    }


    // update
    public function update(Request $request){

       $id = $request->id;

        if($request->hasFile('photo')){

            if($request->old_photo != ''){
                $del_olg_photo = $request->old_photo;
                unlink($del_olg_photo);
            }


            $image = $request->file('photo');
            $imageName = 'photo'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,250)->save('uploads/gallery/'.$imageName);
            $saveUrl = 'uploads/gallery/'.$imageName;

            Gallery::findOrFail($id)->update([
                'created_at' => Carbon::now(),
                'photo' => $saveUrl,
            ]);
        }

        return redirect()->route('gallery.index');

    }

    // delete
    public function delete($id){

        $gallerys = Gallery::findOrFail($id);

        if($gallerys->photo != null){
            $del_olg_photo = $gallerys->photo;
            unlink($del_olg_photo);
        }

        Gallery::findOrFail($id)->delete();

        return back();

    }


}
