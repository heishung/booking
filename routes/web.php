<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now createe something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','web','permission:1']],function (){
	Route::group(['prefix'=>'location'],function (){
		Route::get('list', 'LocationController@getList')->name('admin.location.list');
		Route::get('edit/{id}', 'LocationController@getEdit')->where('id', '[0-9]+');
		Route::post('edit/{id}', 'LocationController@postEdit')->where('id', '[0-9]+');
		Route::get('create', 'LocationController@getcreate')->name('admin.location.create');
		Route::post('store','LocationController@store')->name('admin.location.store');
		Route::get('delete/{id}','LocationController@getdelete')->where('id', '[0-9]+');

	});
	Route::group(['prefix'=>'hotels'],function (){
		Route::get('list', 'HotelsController@getListhotels')->name('admin.hotels.list');
		Route::get('edit/{id}', 'HotelsController@getEdit')->where('id', '[0-9]+');
		Route::post('edit/{id}', 'HotelsController@postEdit')->where('id', '[0-9]+');
		Route::get('create', 'HotelsController@getcreate')->name('admin.hotels.create');
		Route::post('store','HotelsController@store')->name('admin.hotels.store');
		Route::get('delete/{id}','HotelsController@getdelete')->where('id', '[0-9]+');
		Route::post('dropzone/store','ImagesController@uploadImage')->name('dropzone.store');

	});
    Route::group(['prefix'=>'post'],function (){
        Route::get('list', 'PostController@listpost')->name('admin.post.list');
        Route::get('edit/{id}', 'PostController@getEdit')->where('id', '[0-9]+');
        Route::post('edit/{id}', 'PostController@postEdit')->name('post.edit')->where('id', '[0-9]+');
        Route::get('create', 'PostController@getcreate')->name('admin.post.create');
        Route::post('store','PostController@store')->name('admin.post.store');
        Route::get('delete/{id}','PostController@getdelete')->where('id', '[0-9]+');

    });
	Route::group(['prefix'=>'rooms',],function (){
		Route::get('list', 'RoomsController@getList')->name('admin.rooms.list');
		Route::get('edit/{id}', 'RoomsController@getEdit')->name('admin.rooms.edit')->where('id', '[0-9]+');
		Route::post('edit/{id}', 'RoomsController@postEdit')->name('admin.rooms.edit')->where('id', '[0-9]+');
		Route::get('creat', 'RoomsController@getCreat')->name('admin.rooms.create');
		Route::post('store','RoomsController@postStore')->name('admin.rooms.store');
		Route::post('Booking','RoomsController@Booking')->name('admin.rooms.Booking');
		Route::get('delete/{id}','RoomsController@getDelete')->name('admin.rooms.delete')->where('id', '[0-9]+');
	});
	Route::group(['prefix'=>'reviews',],function (){
		Route::get('list','ReviewsController@getList')->name('admin.reviews.list');
		Route::get('creat','ReviewsController@getCreat');
		Route::post('store','ReviewsController@postStore')->name('admin.reviews.store');
		Route::get('/edit/{id}','ReviewsController@GetEdit')->where('id', '[0-9]+');
		Route::post('/edit/{id}','ReviewsController@PostEdit')->where('id', '[0-9]+');
		Route::get('/delete/{id}','ReviewsController@PostDelete')->where('id', '[0-9]+');
	});
    Route::group(['prefix'=>'slide',],function (){
        Route::get('list','SlideController@getList')->name('slide.list');
        Route::get('creat','SlideController@getCreat')->name('slide.creat');
        Route::post('store','SlideController@postStore')->name('slide.store');
        Route::get('/edit/{id}','SlideController@GetEdit')->name('edit.slide')->where('id', '[0-9]+');
        Route::post('/edit/{id}','SlideController@PostEdit')->name('post.edit.slide')->where('id', '[0-9]+');
        Route::get('/delete/{id}','SlideController@PostDelete')->name('delete.slide')->where('id', '[0-9]+');
    });
	Route::group(['prefix'=>'user'],function (){
	    Route::get('list','UserController@getList');
        Route::get('edit/{id}','UserController@getEdit');
        Route::post('edit/{id}','UserController@postEdit');
        Route::post('delete/{id}','UserController@delete');
    });

	Route::group(['prefix'=>'ajax'],function (){
		Route::get('rooms/{location_id}','AjaxController@getHotels')->where('id', '[0-9]+');
	});
	Route::group(['prefix'=>'option'],function (){
	    Route::get('/edit','OptionController@geteditcustom')->name('geteditcustom');
	    Route::post('/edit','OptionController@posteditcustom')->name('posteditcustom');
	    Route::get('/creat','OptionController@creatfeild')->name('creatfeild');
	    Route::post('/creat','OptionController@storefeild')->name('storefeild');
    });
});

Route::get('/','FrontendController@index');
Route::get('img/view','ImagesController@view')->name('img.view');

Route::group(['prefix'=>'contact'],function (){
    Route::post('/index','ContactController@storeContact')->name('contactpost');
    Route::get('/index','ContactController@index')->name('contactindex');
});

/*get promotion*/
Route::get('/promotion','PostController@listPromotion')->name('promotion.list');
Route::get('/itineraries','PostController@listItineraries')->name('itineraries.list');
Route::get('/services','PostController@listServices')->name('services.list');
/*detail post promotion*/
Route::get('/post/{id}','PostController@postDetail')->name('post.detail');

/*list hotel in location*/
Route::get('/location/{slug}','FrontendController@detailLocation')->name('location.detail');
/*list room in hotel*/
Route::get('/list/room/{hotels_id}','FrontendController@listRoom')->name('room.list');

/*Booking*/
Route::get('/booking/{id}','BookingController@Bookingindex')->name('bookingindex');
Route::post('/booking/{id}','FrontendController@bookingstore')->name('bookingstore');

/*Search room hotel*/
Route::post('/bookingguide','BookingSearchController@BookingGuide')->name('bookingguide');


