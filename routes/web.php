<?php

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

//Route::get('/','controller1@myhomepage');
Route::get('/','controller1@home');
Route::get('/menu','controller1@menu');
Route::get('/page1','controller1@page1');
Route::get('/page2','controller1@page2');
//Route::get('/page3','controller1@page3');
Route::post('/page3','controller1@page3');
Route::get('/page3','controller1@page3');

Route::get('/page4','controller1@page4');
Route::post('/page5','controller1@page5');




Route::get('/first','controller1@first');

Route::get('/second','controller1@second');
Route::post('/second','controller1@second');

Route::get('/third','controller1@third');
Route::post('/third','controller1@third');

Route::get('/child1','controller1@child1');
Route::get('/child2','controller1@child2');
Route::get('/child3','controller1@child3');
Route::post('/child3','controller1@child3');

Route::get('/child4','controller1@child4');
Route::get('/child5','controller1@child5');


Route::get('/register','controller1@register');
Route::get('/registersummary','controller1@registersummary');


Route::get('/viewall', 'dbmscontroller@viewall');

Route::get('/search', 'dbmscontroller@search');
Route::post('/searchresult', 'dbmscontroller@searchresult');

Route::get('/insert', 'dbmscontroller@insert');
Route::post('/insertprocess', 'dbmscontroller@insertprocess');


Route::get('/delete', 'dbmscontroller@delete');
Route::post('/deleteprocess', 'dbmscontroller@deleteprocess');

Route::get('/deletequick/{id}', 'dbmscontroller@deletequick');

Route::get('/update', 'dbmscontroller@update');
Route::post('/updatedisplay', 'dbmscontroller@updatedisplay');
Route::post('/updateprocess', 'dbmscontroller@updateprocess');

Route::get('/updatequick/{id}', 'dbmscontroller@updatequick');

Route::get('/login', 'dbmscontroller@login');
Route::post('/logincheck', 'dbmscontroller@logincheck');
Route::get('/logout', 'dbmscontroller@logout');

Route::get('/testview', 'dbmscontroller@testview');
Route::get('/testadd', 'dbmscontroller@testadd');
Route::get('/testdecrypt', 'dbmscontroller@testdecrypt');
Route::get('/testupdate', 'dbmscontroller@testupdate');
Route::get('/testdelete', 'dbmscontroller@testdelete');
Route::get('/clearauthentication', 'dbmscontroller@clearauthentication');


//eloquent routes
Route::get('/eloqview', 'eloq@viewall');
Route::get('/eloqinsert', 'eloq@insert');
Route::get('/eloqupdate', 'eloq@update');
Route::get('/eloqdelete', 'eloq@delete');

Route::get('/createfile', 'eloq@createfile');
Route::get('/write', 'eloq@write');
Route::get('/read', 'eloq@read');
Route::get('/deletefile1', 'eloq@deletefile1');
Route::get('/makefolder1', 'eloq@makefolder1');
Route::get('/deletefolder1', 'eloq@deletefolder1');



//Route::get('/', function () {
//    return view('menu');
//    return view('myhomepage');
//});

//Route::get('/project1/page1', function () {
 //   return view('menu');
//    return view('page1');
//});

//Route::get('/project1/page2', function () {
 //   return view('menu');
//    return view('page2');
//});

//Route::get('/project1/page3', function () {
 //   return view('menu');
 //   return view('page3');
//});

//Route::get('/project1/menu', function () {
//    return view('menu');
//    return view('menu');
//});
