
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/',['as'=>'MyRoute',function(){
	return view('index');
}]);

Auth::routes();
Route::get('home',function()
{
	return redirect()->route('MyRoute');
});
// Route::get('home', 'HomeController@index')

// Route::get('artists/index/', 'ArtistCtrl@index');

Route::resource('artists','ArtistCtrl');
Route::get('artists/show/{id}', 'ArtistCtrl@show')->name('artists.show');


Route::resource('/musics','MusicCtrl');

Route::get('/musics',['as'=>'music.index','uses'=>'MusicCtrl@index']);
// Route::get('/musics/show/{id}',['as'=>'music.show','uses'=>'MusicCtrl@index']);

Route::get('Test/show/{id}', 'TestCtrl@show')->name('Test.index');

Route::resource('simmovie','SimmovieCtrl');
Route::get('simmovie/show/{id}', 'SimmovieCtrl@show')->name('simmovie.show');

Route::resource('film','FilmCtrl');
Route::get('film/show/{id}', 'FilmCtrl@show')->name('film.show');

Route::post('film/uprate', 'FilmCtrl@uprate')->name('film.uprate');
