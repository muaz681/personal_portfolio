<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApplicationSetting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use File;

class ApplicationSettingController extends Controller
{

    // index
    public function index(){
        return view('admin.application_setting.index');
    }

    // Update
    public function updateSetting(Request $request){


        foreach ($request->types as $type) {

            if ($type === 'app_logo') {

                $this->upload($request->app_logo, 'app_logo');

            }

            elseif ($type === 'app_favicon') {

                $this->upload($request->app_favicon, 'app_favicon');

            } else {
                $business_settings = ApplicationSetting::where('key', $type)->first();
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
                    $business_settings = new ApplicationSetting;
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

        return redirect()->route('general_setting');

    }
    public function upload($request, $data)
    {

        if($request !== null){


            $imageName = $data.'.'. $request->getClientOriginalExtension();
            $saveUrl = 'uploads/'.$data.'/';

            if (!file_exists($saveUrl)) {
                mkdir($saveUrl, 666, true);
            }
            Image::make($request)->save($saveUrl.$imageName);
            $business_settings = ApplicationSetting::where('key', $data)->first();
            if($business_settings == null){
                $business_settings = new ApplicationSetting;
                $business_settings->key = $data;
            }
            $business_settings->value = $saveUrl.$imageName;
            $business_settings->save();
        }
    }


}
