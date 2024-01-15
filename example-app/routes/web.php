<?php

use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/my-controller", [MyController::class, "index"]);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function() {
    // return view("myroute");
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.mypage', $data);
});

Route::post('/my-route', function(Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});
