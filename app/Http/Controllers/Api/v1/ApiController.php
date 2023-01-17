<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationSetting;
use App\Models\Home;
use App\Models\Banner;
use App\Models\Schedule;
use App\Models\Research;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\Apply;
use App\Models\Seminar;

class ApiController extends Controller
{

    // getApplicationSettings
    public function getApplicationSettings(){

        $application_settings = ApplicationSetting::pluck('value', 'key');

        return response()->json([

            'success' => 200,
            'data' => $application_settings,

        ]);

    }


    // getHomeData
    public function getPageData(){

        $getPageDatas = Home::pluck('value', 'key');

        return response()->json([

            'success' => 200,
            'data' => $getPageDatas,

        ]);

    }

    // getBanners
    public function getBanners(){

        $getBanners = Banner::all();

        return response()->json([

            'success' => 200,
            'data' => $getBanners,

        ]);

    }

    // getSchedule
    public function getSchedule(){

        $getSchedule = Schedule::all();

        return response()->json([

            'success' => 200,
            'data' => $getSchedule,

        ]);

    }

    // getResearch
    public function getResearch(){

        $getResearch = Research::all();

        return response()->json([

            'success' => 200,
            'data' => $getResearch,

        ]);

    }

    // getSeminar
    public function getSeminar(){

        $getSeminar = Seminar::all();

        return response()->json([

            'success' => 200,
            'data' => $getSeminar,

        ]);

    }

    // getGallery
    public function getGallery(){

        $getGallery = Gallery::all();

        return response()->json([

            'success' => 200,
            'data' => $getGallery,

        ]);

    }

    // getVideo
    public function getVideo(){

        $getVideo = Video::all();

        return response()->json([

            'success' => 200,
            'data' => $getVideo,

        ]);

    }


    // getApplyPeople
    public function apply(Request $request){

        $apply =  Apply::create([
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,
        ]);

        return response()->json([

            'success' => 200,
            'data' => $apply,

        ]);

    }


}
