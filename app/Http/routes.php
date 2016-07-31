<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	// return Hash::make('mada1234');

	if(Auth::guest())
		return view('auth.login');
	else
    	return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function() {

	// if(Auth::user()->role == 'root' || Auth::user()->role == 'clerk') {

		Route::group(['prefix' => 'daftar'], function() {

			Route::get('daftarPengusaha', [
				'as'	=> 'daftarPengusaha',
				'uses'	=> 'PengusahaController@daftarPengusaha'
			]);

			Route::post('daftarPengusaha', [
				'as'	=> 'daftarPengusaha',
				'uses'	=> 'PengusahaController@postDaftarPengusaha'
			]);

			Route::get('daftarKad', [
				'as'	=> 'daftarKad',
				'uses'	=> 'KadController@daftarKad'
			]);

			Route::post('daftarKad', [
				'as'	=> 'postDaftarKad',
				'uses'	=> 'KadController@postDaftarKad'

			]);

			Route::get('daftarProgram', [
				'as'	=> 'daftarProgram',
				'uses'	=> 'ProgramController@daftarProgram'
			]);

			Route::post('daftarProgram', [
				'as'	=> 'postDaftarProgram',
				'uses'	=> 'ProgramController@postDaftarProgram'

			]);
		});

		Route::get('/semakKad', 'SemakController@semakKad');
		Route::post('/semakKad', 'SemakController@postSemakKad');
	// }

		Route::group(['prefix' => 'functions'], function() {

			Route::get('searchNoKad', 'SearchController@searchNoKad');

		});

		Route::group(['prefix' => 'laporan'], function() {

			Route::get('/senaraiUsahawan', 'SenaraiController@senarai');
			Route::get('/umum', 'LaporanController@umum');
			Route::get('/prestasi', 'LaporanController@prestasi');


		});

		Route::group(['prefix' => 'perkhidmatan'], function() {

			Route::get('/penjual', 'PerkhidmatanController@penjual');
			Route::get('/pembeli', 'PerkhidmatanController@pembeli');


		});

		Route::get('/carian', [
			'as'	=> 'carian',
			'uses'	=> 'CarianController@carian'
		]);

		Route::post('/carian', [
			'as'	=> 'carianPost',
			'uses'	=> 'CarianController@postCarian'
		]);

		Route::get('/point', [
			'as'	=> 'point',
			'uses'	=> 'PointController@point'
		]);

		Route::post('/point', [
			'as'	=> 'postPoint',
			'uses'	=> 'PointController@postPoint'
		]);


});
