<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Home;
use App\Models\WhatYouWillGet;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class HomePageController extends Controller
{
    public function about(){
        $home_pages = Home::all();
        return view('admin.home_page.about', compact('home_pages'));
        return view('welcome', compact('home_pages'));
    }

    public function achive(){
        $home_pages = Home::all();
        return view('admin.home_page.achive', compact('home_pages'));
        return view('welcome', compact('home_pages'));
    }

    public function schedule_page(){

        $schedules = Schedule::all();
        $home_pages = Home::all();
        return view('admin.home_page.schedule', compact('home_pages', 'schedules'));
    }



    // create
    public function index(){
        $home_pages = Home::all();
        return view('admin.home_page.index', compact('home_pages'));
    }

    // Create and Update
    public function updateHome(Request $request){


        foreach ($request->types as $type) {

            if ($type === 'about_img') {

                $this->upload($request->about_img, 'about_img');

            }elseif ($type === 'amar_img') {

                $this->upload($request->amar_img, 'amar_img');

            }elseif ($type === 'rajniti_img_one') {

                $this->upload($request->rajniti_img_one, 'rajniti_img_one');

            }elseif ($type === 'rajniti_img_two') {

                $this->upload($request->rajniti_img_two, 'rajniti_img_two');

            }elseif ($type === 'rajniti_img_three') {

                $this->upload($request->rajniti_img_three, 'rajniti_img_three');

            }elseif ($type === 'rajniti_img_four') {

                $this->upload($request->rajniti_img_four, 'rajniti_img_four');

            }elseif ($type === 'rajniti_img_five') {

                $this->upload($request->rajniti_img_five, 'rajniti_img_five');

            }elseif ($type === 'rajniti_img_six') {

                $this->upload($request->rajniti_img_six, 'rajniti_img_six');

            }  else {
                $business_settings = Home::where('key', $type)->first();
                if($business_settings!=null){
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
                else{
                    $business_settings = new Home;
                    $business_settings->key = $type;
                    if(gettype($request[$type]) == 'array'){
                        $business_settings->value = json_encode($request[$type]);
                    }
                    else {
                        $business_settings->value = $request[$type];
                    }
                    $business_settings->save();
                }
            }

        }

        return redirect()->back();

    }

    public function upload($request, $data)
    {

        if($request !== null){


            $imageName = $data.'.'. $request->getClientOriginalExtension();
            $saveUrl = 'uploads/home_pages/'.$data.'/';

            if (!file_exists($saveUrl)) {
                mkdir($saveUrl, 666, true);
            }
            Image::make($request)->save($saveUrl.$imageName);
            $business_settings = Home::where('key', $data)->first();
            if($business_settings == null){
                $business_settings = new Home;
                $business_settings->key = $data;
            }
            $business_settings->value = $saveUrl.$imageName;
            $business_settings->save();
        }
    }



}
