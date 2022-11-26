<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class ResearchController extends Controller
{

    public function index()
    {
        $researches = Research::all();
        return view('admin.research.index', compact('researches'));
    }
    // public function index_show(){
    //     $researches = Research::all();
    //     return view('welcome', compact('researches'));
    // }


    public function create()
    {
        return view('admin.research.create');
    }


    public function store(Request $request)
    {
        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'research'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(444,500)->save('uploads/research/'.$imageName);
            $saveUrl = 'uploads/research/'.$imageName;

            Research::create([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('research.index');
    }


    public function show(Research $research)
    {
        //
    }

    public function edit($id)
    {
        $research = Research::findOrFail($id);
        return view('admin.research.edit', compact('research'));
    }


    public function update(Request $request)
    {
        $id = $request->id;

        if($request->hasFile('photo')){

            if($request->old_photo != ''){
                $del_olg_photo = $request->old_photo;
                unlink($del_olg_photo);
            }


            $image = $request->file('photo');
            $imageName = 'research'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(444,500)->save('uploads/research/'.$imageName);
            $saveUrl = 'uploads/research/'.$imageName;

            Research::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);
        }else{
            Research::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('research.index');
    }


    public function destroy($id)
    {
        $showData = Research::findOrFail($id);

        if($showData->photo != null){
            $del_olg_photo = $showData->photo;
            unlink($del_olg_photo);
        }

        Research::findOrFail($id)->delete();

        return back();
    }
}
