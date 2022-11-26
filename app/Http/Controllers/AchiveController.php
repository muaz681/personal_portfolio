<?php

namespace App\Http\Controllers;

use App\Models\Achive;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class AchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achives = Achive::all();
        return view('admin.achive.index', compact('achives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('photo')){

            $image = $request->file('photo');
            $imageName = 'achive'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(464,473)->save('uploads/achive/'.$imageName);
            $saveUrl = 'uploads/achive/'.$imageName;

            Achive::create([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);

        }

        return redirect()->route('achive.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Achive  $achive
     * @return \Illuminate\Http\Response
     */
    public function show(Achive $achive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Achive  $achive
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achive = Achive::findOrFail($id);
        return view('admin.achive.edit', compact('achive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Achive  $achive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        if($request->hasFile('photo')){

            if($request->old_photo != ''){
                $del_olg_photo = $request->old_photo;
                unlink($del_olg_photo);
            }


            $image = $request->file('photo');
            $imageName = 'achive'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(464,473)->save('uploads/achive/'.$imageName);
            $saveUrl = 'uploads/achive/'.$imageName;

            Achive::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'photo' => $saveUrl,
                'created_at' => Carbon::now(),
            ]);
        }else{
            Achive::findOrFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->route('achive.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Achive  $achive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achive $achive)
    {
        $showData = Achive::findOrFail($id);

        if($showData->photo != null){
            $del_olg_photo = $showData->photo;
            unlink($del_olg_photo);
        }

        Achive::findOrFail($id)->delete();

        return back();
    }
}
