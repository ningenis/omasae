<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('bisnis', 'BisnisController');

Route::get('tentang', function()
{
	return View::make('admin.halaman.status');
});

Route::get('admin/produk', function() {
	return View::make('admin.halaman.produk.index');
});

Route::Get('admin/produk/tambah', function() {
	return View::make('admin.halaman.produk.tambah');
});

Route::Get('admin/energy-management', function() {
	return View::make('admin.energy.index');
});
Route::Get('admin/temperature-control', function() {
	$data = DB::select(DB::raw('SELECT q.suhu, q.waktu
    					FROM (SELECT suhu, waktu
              				FROM suhu
              				ORDER BY waktu DESC LIMIT 30) q
    					ORDER BY q.waktu ASC;'));
	return View::make('admin.temperature.index', array('temperatur' => $data));
});
Route::Get('admin/security-system', function() {
	return View::make('admin.security.index');
});
Route::Get('admin/surveillance-system', function() {
	return View::make('admin.surveillance.index');
});
Route::Get('admin/dashboard', function() {
	return View::make('admin.dashboard.index');
});