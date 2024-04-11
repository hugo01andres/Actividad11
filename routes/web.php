Route::get('/', 'MainController@index')->name('home');
Route::get('/fotos', 'MainController@fotos')->name('photos');
Route::get('/contacto', 'MainController@contacto')->name('contact');
