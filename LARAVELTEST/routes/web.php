<?php

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
////
////Route::get('/', function () {
////    return view('welcome');
////});
//
//
////route::get('/','StudentController@index');
//
//
////route::get('/basis/bitm',function (){
////    return 'Hello BITM';
////});
//
//
//
//route::get('/',[
//    'uses' => 'StudentController@index',
//    'as' => '/'
//]);
//
//
//route::get('/about',[
//    'uses' => 'StudentController@add',
//    'as' => '/about'
//]);











route::get('/', [
    'uses' =>'NewShopController@index',
    'as' =>'/'
]);


route::get('/category-product', [
    'uses' =>'NewShopController@categoryProduct',
    'as' =>'category-product'
]);


route::get('/mailUs', [
    'uses' =>'NewShopController@mailUs',
    'as' =>'mailUs'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
