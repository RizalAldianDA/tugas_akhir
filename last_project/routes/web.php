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
    return view('welcome');
});

/*Login Page*/
Route::get('/login', 'WargaController@loginpage')->name('loginpage.loginpage');

/*Middleware Admin*/
Route::get('/admin/login', 'AdminController@index')->name('login.index');
Route::get('/admin/logout', 'AdminController@logout')->name('login.logout');
Route::post('/admin/login', 'AdminController@process')->name('login.process');

/*Middleware Ketua*/
Route::get('/ketua/login', 'KetuaController@index2')->name('loginketua.index2');
Route::get('/ketua/logout', 'KetuaController@logout')->name('loginketua.logout');
Route::post('/ketua/login', 'KetuaController@process')->name('loginketua.process');

/*Middleware Warga*/
Route::get('/warga/login', 'WargaController@index3')->name('loginwarga.index3');
Route::get('/warga/logout', 'WargaController@logout')->name('loginwarga.logout');
Route::post('/warga/login', 'WargaController@process')->name('loginwarga.process');

/*ADMIN ROUTE */
Route::get('admin/ketua/create', 'KetuaController@create')->name('ketua.create')->middleware('login_auth');
Route::post('/admin/ketua', 'KetuaController@store')->name('ketua.store')->middleware('login_auth');
Route::get('/admin/ketua', 'KetuaController@index')->name('ketua.index')->middleware('login_auth');
Route::get('/admin/ketua/{ketua}', 'KetuaController@show')->name('ketua.show')->middleware('login_auth');
Route::get('/admin/ketua/{ketua}/edit', 'KetuaController@edit')->name('ketua.edit')->middleware('login_auth');
Route::patch('/admin/ketua/{ketua}', 'KetuaController@update')->name('ketua.update')->middleware('login_auth');
Route::delete('/admin/ketua/{ketua}', 'KetuaController@destroy')->name('ketua.destroy')->middleware('login_auth');

Route::get('/admin/warga/cari', 'WargaController@searchall')->name('wargaall.searchall')->middleware('login_auth');
Route::get('/admin/warga', 'WargaController@indexall')->name('wargaall.indexall')->middleware('login_auth');
Route::get('/admin/warga/{warga}', 'WargaController@detailall')->name('wargaall.detailall')->middleware('login_auth');
Route::get('/admin/warga/{warga}/edit','WargaController@editall')->name('wargaall.editall')->middleware('login_auth');
Route::patch('/admin/warga/{warga}','WargaController@updateall')->name('wargaall.updateall')->middleware('login_auth');
Route::delete('/admin/warga/{warga}', 'WargaController@destroy')->name('warga.destroy')->middleware('login_auth');

Route::get('/admin/info/create','InfoController@create')->name('info.create')->middleware('login_auth');
Route::post('/admin/info','InfoController@store')->name('info.store')->middleware('login_auth');
Route::get('/admin/info','InfoController@index')->name('info.index')->middleware('login_auth');
Route::get('/admin/info/{info}/edit','InfoController@edit')->name('info.edit')->middleware('login_auth');
Route::patch('/admin/info/{info}','InfoController@update')->name('info.update')->middleware('login_auth');
Route::delete('/admin/info/{info}', 'InfoController@destroy')->name('info.destroy')->middleware('login_auth');

/*Ketua RT Route */
Route::get('/ketua/warga/cari', 'KetuaController@search')->name('warga.search')->middleware('login_auth_ketua');
Route::get('/ketua/tentang-kami', 'KetuaController@about')->name('pageketua.tentangkami')->middleware('login_auth_ketua');
Route::get('/ketua/warga/tambah-warga', 'WargaController@addwarga')->name('warga.addwarga')->middleware('login_auth_ketua');
Route::get('/ketua/warga', 'WargaController@index')->name('warga.index')->middleware('login_auth_ketua');
Route::get('/ketua/warga/{profil}','WargaController@showwarga')->name('warga.showwarga')->middleware('login_auth_ketua');
Route::get('/ketua/warga/tambah-warga/manual-warga', 'WargaController@create')->name('warga.create')->middleware('login_auth_ketua');
Route::post('/ketua/warga', 'WargaController@store')->name('warga.store')->middleware('login_auth_ketua');
Route::get('/ketua/warga/tambah-warga/import-warga', 'WargaController@createexcel')->name('warga.createexcel')->middleware('login_auth_ketua');
Route::post('/ketua/warga/tambah-warga/import-warga','WargaController@wargaimport')->name('warga.autocreate')->middleware('login_auth_ketua');
Route::get('/ketua/profil/{ketua}', 'KetuaController@profil')->name('pageketua.profilketua')->middleware('login_auth_ketua');
Route::get('/ketua/profil/{ketua}/edit','KetuaController@editketua')->name('pageketua.editketua')->middleware('login_auth_ketua');
Route::patch('/ketua/profil/{ketua}','KetuaController@updateketua')->name('pageketua.updateketua')->middleware('login_auth_ketua');

/*Warga Route */
Route::get('/warga/beranda', 'WargaController@beranda')->name('pagewarga.berandawarga')->middleware('login_auth_warga');
Route::get('/warga/tentang-kami', 'WargaController@about')->name('pagewarga.tentangkami')->middleware('login_auth_warga');
Route::get('/warga/vaksinasi/create', 'VaksinasiController@create')->name('vaksin.create')->middleware('login_auth_warga');
Route::post('/warga/vaksinasi', 'VaksinasiController@store')->name('vaksin.store')->middleware('login_auth_warga');
Route::get('/warga/vaksinasi', 'VaksinasiController@index')->name('vaksin.index')->middleware('login_auth_warga');
Route::get('/warga/vaksinasi/{vaksinasi}', 'VaksinasiController@show')->name('vaksin.show')->middleware('login_auth_warga');
Route::get('/warga/profil/{warga}', 'WargaController@profil')->name('pagewarga.profilwarga')->middleware('login_auth_warga');
Route::get('/warga/profil/{warga}/edit','WargaController@editwarga')->name('pagewarga.editwarga')->middleware('login_auth_warga');
Route::patch('/warga/profil/{warga}','WargaController@updatewarga')->name('pagewarga.updatewarga')->middleware('login_auth_warga');




