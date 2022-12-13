<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\ApplicationSettingController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\AchiveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('send_mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    \Mail::to('muaz68128@gmail.com')->send(new \App\Mail\MyTestMail($details));

    // dd("Email is Sent.");
});

Route::post('store', [ApplyController::class, 'store'])->name('apply.store');



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/clear', function(){
    Artisan::call('optimize');
    // Artisan::call('cache:clear');
    // Artisan::call('route:clear');
    // Artisan::call('config:clear');
});



Route::match(['get', 'post'], 'register', function(){
	return redirect('/login');
});

Auth::routes();



//sob code aitar moddhe dhukaben sudhu Auth::routes() bad e
//jeigula login chara dekhte parbe na seigula aitar moddhe diben

Route::group(['middleware' => ['auth']], function () {



/*
|--------------------------------------------------------------------------
| Profile Controller
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'profile'], function(){
    Route::get('view', [ProfileController::class, 'profile_view'])->name('profile.view');
    Route::post('update', [ProfileController::class, 'profile_update'])->name('profile.update');
    Route::get('password', [ProfileController::class, 'profile_password'])->name('profile.password');
    Route::post('password_update', [ProfileController::class, 'profile_password_update'])->name('profile.password.update');
});



/*
|--------------------------------------------------------------------------
| Application Setting Controller
|--------------------------------------------------------------------------
*/

Route::get('/general-settings', [ApplicationSettingController::class, 'index'])->name('general_setting');
Route::post('/update-settings', [ApplicationSettingController::class, 'updateSetting'])->name('update_setting');



/*
|--------------------------------------------------------------------------
| HomePage Controller
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'research'], function(){
Route::post('update', [ResearchController::class, 'update'])->name('research.update');
Route::get('create', [ResearchController::class, 'create'])->name('research.create');
Route::get('index', [ResearchController::class, 'index'])->name('research.index');
Route::post('store', [ResearchController::class, 'store'])->name('research.store');
Route::get('edit/{id}', [ResearchController::class, 'edit'])->name('research.edit');
Route::get('destroy/{id}', [ResearchController::class, 'destroy'])->name('research.destroy');
});


Route::group(['prefix' => 'seminar'], function(){
Route::post('update', [SeminarController::class, 'update'])->name('seminar.update');
Route::get('create', [SeminarController::class, 'create'])->name('seminar.create');
Route::get('index', [SeminarController::class, 'index'])->name('seminar.index');
Route::post('store', [SeminarController::class, 'store'])->name('seminar.store');
Route::get('edit/{id}', [SeminarController::class, 'edit'])->name('seminar.edit');
Route::get('destroy/{id}', [SeminarController::class, 'destroy'])->name('seminar.destroy');
});

Route::group(['prefix' => 'achive'], function(){
    Route::post('update', [AchiveController::class, 'update'])->name('achive.update');
    Route::get('create', [AchiveController::class, 'create'])->name('achive.create');
    Route::get('index', [AchiveController::class, 'index'])->name('achive.index');
    Route::post('store', [AchiveController::class, 'store'])->name('achive.store');
    Route::get('edit/{id}', [AchiveController::class, 'edit'])->name('achive.edit');
    Route::get('destroy/{id}', [AchiveController::class, 'destroy'])->name('achive.destroy');
});


Route::get('/about', [HomePageController::class, 'about'])->name('about');
// Route::get('/achive', [HomePageController::class, 'achive'])->name('achive');
Route::get('/schedule-page', [HomePageController::class, 'schedule_page'])->name('schedule_page');
Route::get('/home-page', [HomePageController::class, 'index'])->name('home_page');
Route::post('/update-home-page', [HomePageController::class, 'updateHome'])->name('update_home_page');



/*
|--------------------------------------------------------------------------
| Banner Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'banner'], function(){
    Route::get('create', [BannerController::class, 'create'])->name('banner.create');
    Route::get('index', [BannerController::class, 'index'])->name('banner.index');
    Route::post('store', [BannerController::class, 'store'])->name('banner.store');
    Route::get('edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('update', [BannerController::class, 'update'])->name('banner.update');
    Route::get('delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');
});



/*
|--------------------------------------------------------------------------
| Schedule Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'schedule'], function(){
    Route::get('create', [ScheduleController::class, 'create'])->name('schedule.create');
    // Route::get('index', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::post('store', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::get('edit/{id}', [ScheduleController::class, 'edit'])->name('schedule.edit');
    Route::post('update', [ScheduleController::class, 'update'])->name('schedule.update');
    Route::get('delete/{id}', [ScheduleController::class, 'delete'])->name('schedule.delete');
});


/*
|--------------------------------------------------------------------------
| Gallery Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'gallery'], function(){
    Route::get('create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::get('index', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('update', [GalleryController::class, 'update'])->name('gallery.update');
    Route::get('delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
});


/*
|--------------------------------------------------------------------------
| Video Controller
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'video'], function(){
    Route::get('create', [VideoController::class, 'create'])->name('video.create');
    Route::get('index', [VideoController::class, 'index'])->name('video.index');
    Route::post('store', [VideoController::class, 'store'])->name('video.store');
    Route::get('edit/{id}', [VideoController::class, 'edit'])->name('video.edit');
    Route::post('update', [VideoController::class, 'update'])->name('video.update');
    Route::get('delete/{id}', [VideoController::class, 'delete'])->name('video.delete');
});



/*
|--------------------------------------------------------------------------
| FrontEnd Controller
|--------------------------------------------------------------------------
*/

Route::get('/apply', [ApplyController::class, 'index'])->name('apply.index');

Route::get('edit/{id}', [ApplyController::class, 'edit'])->name('apply.edit');


});

