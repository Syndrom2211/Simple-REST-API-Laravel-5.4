<?php
Route::GET('/', 'KecamatanController@nampilkeun_kabeh');
Route::GET('/{id}', 'KecamatanController@nampilkeun_ku_id');
Route::GET('/t/baru', 'KecamatanController@tampilan_tambah');
Route::POST('/t', 'KecamatanController@nambah_data');
Route::DELETE('/d/{id}', 'KecamatanController@ngahapus_data');
Route::PUT('/u/{id}', 'KecamatanController@ngubah_data');
