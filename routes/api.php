<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiController;
use App\Models\Schedule;
use App\Models\Research;
use App\Models\Seminar;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/*
|--------------------------------------------------------------------------
| ApiController Routes
|--------------------------------------------------------------------------
|
*/

// ApplicationSetting
Route::get('/application-settings', [ApiController::class, 'getApplicationSettings']);

// Home Data
Route::get('/home/page-data', [ApiController::class, 'getPageData']);

// Banner
Route::get('/banners', [ApiController::class, 'getBanners']);

// ScheduleController
Route::get('/schedule', [ApiController::class, 'getSchedule']);

// researchController
Route::get('/research', [ApiController::class, 'getResearch']);

// seminarController
Route::get('/seminar', [ApiController::class, 'getSeminar']);


// Gallery
Route::get('/gallery', [ApiController::class, 'getGallery']);

// video
Route::get('/video', [ApiController::class, 'getVideo']);

// apply-people
Route::post('/apply-people', [ApiController::class, 'apply']);
