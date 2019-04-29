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

Route::get('/', function () {
    return view('home');
})->name('album.download');


Route::prefix('admin')->group(function(){
Auth::routes();
Route::get('/dashboard', 'HomeController@Dashboard')->name('dashboard');
Route::get('/code/generator','HomeController@GetCode')->name('get.code');
// Route::get('upload/music','HomeController@UploadMusic')->name('upload.music');
Route::get('generate/code','AdminController@GenerateCode')->name('generate.code');
Route::post('change_status','AdminController@ChangeCodeStatus')->name('change.code.status');
Route::get('ship_code','AdminController@ShipCode')->name('ship.code');
Route::post('post_ship_code','AdminController@PostShipCode')->name('post.ship.code');
Route::get('search/code','AdminController@SearchCode')->name('search.code');
Route::get('filter/code','AdminController@FilterCode')->name('filter.code');
Route::get('shipped_codes','AdminController@ShippedCodes')->name('shipped_codes');
Route::get('unshipped_codes','AdminController@UnShippedCodes')->name('unshipped_codes');
Route::get('redeemed_codes','AdminController@RedeemedCodes')->name('redeemed_codes');

//upload Songs
// Route::post('upload_songs','SongController@Store')->name('store.song');
// Route::get('getsongs/{filename}','SongController@getSongs')->name('get.songs');
// Route::get('download/all','SongController@DownloadZip')->name('download.zip');

//frontendroutes
Route::post('check_code','AdminController@CheckCode')->name('check.code');
Route::get('pbm/getgoodies/{uuid}/{access_code}/{email}','AdminController@GetGoodies')->name('get.goodies');
});


