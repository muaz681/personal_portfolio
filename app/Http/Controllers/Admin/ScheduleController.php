<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class ScheduleController extends Controller
{


    // create
    public function create(){

        return view('admin.schedule.create');

    }

    //index
    // public function index(){
    //     $schedules = Schedule::all();
    //     return view('admin.schedule.index', compact('schedules'));
    // }


    public function store(Request $request){

        Schedule::create([
            'date' => $request->date,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('schedule_page');

    }


    // edit
    public function edit($id){
        $schedule = Schedule::findOrFail($id);
        return view('admin.schedule.edit', compact('schedule'));

    }


    // update
    public function update(Request $request){

       $id = $request->id;

        Schedule::findOrFail($id)->update([
            'date' => $request->date,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('schedule_page');

    }

    // delete
    public function delete($id){

        Schedule::findOrFail($id)->delete();

        return back();

    }


}
