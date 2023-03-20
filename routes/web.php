<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupporterController;

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

Route::get('/', function () {
    if (session("source")) {
        cookie()->queue(cookie("source", session("source"), 60 * 24));
    } else if (cookie("source")) {
        session()->put("source", request()->cookie("source"));
    }
    $supporters = \App\Models\Supporter::where('enabled', true)->where("public", true)->get();
    return view('home', [
        'supporters' => $supporters
    ]);
})->name('home');

Route::resource('supporters', SupporterController::class);

Route::get("/verify/{hash}", function($hash) {
    $status = SupporterController::verify($hash);
    return view("verify", [
        "success" => $status
    ]);
});

Route::get("/s/{orga}", function($orga) {
    return redirect()->route("home")->with("source", $orga);
});
