<?php

use App\Models\ApplicationSetting;
use App\Models\Home;



// general_setting
if(!function_exists('general_setting')){
    function general_setting($key)
    {
        $setting = ApplicationSetting::where('key', $key)->pluck('value')->first();

        return $setting;
    }
}


// Home Page
if(!function_exists('home_content')){
    function home_content($key)
    {
        $home = Home::where('key', $key)->pluck('value')->first();

        return $home;
    }
}
