<?php

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

Route::get('/', function () {
     return redirect("allTasksWating");
});


Route::get("/allTasksWating","TaskController@index")->name("task.index");
Route::get("/allTasksApprove","TaskController@index2")->name("task.index2");

Route::get("/task/create","TaskController@create")->name("task.create");
Route::post("/task/create","TaskController@store")->name("task.store");
// =============================
Route::get("/task/show/{id}","TaskController@show")->name("task.show");
//==========================
Route::get("/task/delete/{id}","TaskController@destroy")->name("task.destroy");
## =======
Route::post("/task/approve/{id}","TaskController@approve")->name("task.approve");
Route::post("/task/refuse/{id}","TaskController@refuse")->name("task.refuse");
