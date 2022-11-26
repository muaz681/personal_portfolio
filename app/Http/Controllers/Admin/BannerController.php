<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class BannerController extends Controller
{


    // create
    public function create(){

        return view('admin.banner.create');

    }

    //index
    public function index(){
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));

    }


    public function store(Request $request){

        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'banner'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,700)->save('uploads/banner/'.$imageName);
            $saveUrl = 'uploads/banner/'.$imageName;

            Banner::create([
                'banner_description' => $request->banner_description,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('banner.index');

    }


    // edit
    public function edit($id){
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));

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
            $imageName = 'banner'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(250,250)->save('uploads/banner/'.$imageName);
            $saveUrl = 'uploads/banner/'.$imageName;

            Banner::findOrFail($id)->update([
                'banner_description' => $request->banner_description,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);
        }else{
            Banner::findOrFail($id)->update([
                'banner_description' => $request->banner_description,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('banner.index');

    }

    // delete
    public function delete($id){

        $showData = Banner::findOrFail($id);

        if($showData->photo != null){
            $del_olg_photo = $showData->photo;
            unlink($del_olg_photo);
        }

        Banner::findOrFail($id)->delete();

        return back();

    }


}
