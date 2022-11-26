<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class SeminarController extends Controller
{

    public function index()
    {
        $seminars = Seminar::all();
        return view('admin.seminar.index', compact('seminars'));
    }


    public function create()
    {
        return view('admin.seminar.create');
    }

    public function store(Request $request)
    {
        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'seminar'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(464,473)->save('uploads/seminar/'.$imageName);
            $saveUrl = 'uploads/seminar/'.$imageName;

            Seminar::create([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('seminar.index');
    }


    public function show(Seminar $seminar)
    {
        //
    }

    public function edit($id)
    {
        $seminar = Seminar::findOrFail($id);
        return view('admin.seminar.edit', compact('seminar'));
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
            $imageName = 'seminar'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(464,473)->save('uploads/seminar/'.$imageName);
            $saveUrl = 'uploads/seminar/'.$imageName;

            Seminar::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);
        }else{
            Seminar::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('seminar.index');
    }

    public function destroy($id)
    {
        $showData = Seminar::findOrFail($id);

        if($showData->photo != null){
            $del_olg_photo = $showData->photo;
            unlink($del_olg_photo);
        }

        Seminar::findOrFail($id)->delete();

        return back();
    }
}
