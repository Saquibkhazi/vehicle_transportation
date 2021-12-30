<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VehicleController;
use App\Http\Controllers\NotificationController;


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

Route::get('send-sms-notification', [NotificationController::class, 'sendSmsNotificaition']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('file-upload', function () {
    return view('default');
});

//DRIVER START

//driver add form
Route::view('driveradd','drivers.addform');
Route::post('driveradd',[VehicleController::class,'daddData']);

//driver view
Route::get('driverview',[VehicleController::class,'dshow']);

//driver delete
Route::get('driverdelete/{id}',[VehicleController::class,'ddelete']);

//driver update
Route::get('driverupdate/{id}',[VehicleController::class,'dshowupdate']);
Route::post('driverupdate',[VehicleController::class,'dupdate']);

Route::get('aboutus', [VehicleController::class, 'aboutus']);
Route::get('pdf/generate', [VehicleController::class, 'generatePDF'])->name('pdf.generate');

//DRIVER END


//VEHICLE START

//vehicle add form
Route::view('vehicleadd','vehicles.addform');
Route::post('vehicleadd',[VehicleController::class,'addData']);

//vehicle view
Route::get('vehicleview',[VehicleController::class,'show']);
Route::get('vehicledelete/{id}',[VehicleController::class,'delete']);

//vehicle update
Route::get('vehicleupdate/{id}',[VehicleController::class,'showupdate']);
Route::post('vehicleupdate',[VehicleController::class,'update']);

//VEHICLE END


//FUEL START

//fuel add form
Route::view('fueladd','fuels.addform');
Route::post('fueladd',[VehicleController::class,'faddData']);

//fuel view
Route::get('fuelview',[VehicleController::class,'fshow']);
Route::get('fueldelete/{id}',[VehicleController::class,'fdelete']);

//fuel update
Route::get('fuelupdate/{id}',[VehicleController::class,'fshowupdate']);
Route::post('fuelupdate',[VehicleController::class,'fupdate']);

//FUEL END

//TYRE START

//tyre add form
Route::view('tyreadd','tyres.addform');
Route::post('tyreadd',[VehicleController::class,'taddData']);

//tyre view
Route::get('tyreview',[VehicleController::class,'tshow']);
Route::get('tyredelete/{id}',[VehicleController::class,'tdelete']);

//tyre update
Route::get('tyreupdate/{id}',[VehicleController::class,'tshowupdate']);
Route::post('tyreupdate',[VehicleController::class,'tupdate']);

//TYRE END

//TRIP START

//trip add form
Route::view('tripadd','trips.addform');
Route::post('tripadd',[VehicleController::class,'traddData']);

//trip view
Route::get('tripview',[VehicleController::class,'trshow']);
Route::get('tripdelete/{id}',[VehicleController::class,'trdelete']);

//trip update
Route::get('tripupdate/{id}',[VehicleController::class,'trshowupdate']);
Route::post('tripupdate',[VehicleController::class,'trupdate']);

//TRIP END

//FOR CAPTCHA
Route::get('/reload-captcha', [VehicleController::class, 'reloadCaptcha']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::get('driverhome',[VehicleController::class,'driverhome']);
Route::get('vehiclehome',[VehicleController::class,'vehiclehome']);
Route::get('fuelhome',[VehicleController::class,'fuelhome']);
Route::get('tyrehome',[VehicleController::class,'tyrehome']);
Route::get('triphome',[VehicleController::class,'triphome']);