<?php
Route::get('/', 'KecamatanController@nampilkeun_kabeh');
Route::get('/{id}', 'KecamatanController@nampilkeun_ku_id');
Route::get('/t', 'KecamatanController@nambah_data');
Route::get('/d/{id}', 'KecamatanController@ngahapus_data');
Route::get('/u/{id}', 'KecamatanController@ngubah_data');
