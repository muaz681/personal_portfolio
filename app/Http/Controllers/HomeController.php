<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Research;
use App\Models\Seminar;
use App\Models\Schedule;
use App\Models\Video;
use App\Models\Gallery;
use App\Models\Achive;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banners = Banner::all();
        $researches = Research::all();
        $schedules = Schedule::all();
        $videos = Video::all();
        $gallerys = Gallery::all();
        $seminars = Seminar::all();
        $achives = Achive::all();
        return view('welcome', compact('banners', 'researches', 'schedules', 'videos', 'gallerys', 'seminars', 'achives'));

    }
}
