<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard','PagesController@home');

Route::get('/','Otentikasi\OtentikasiController@index')->name('login');
Route::post('/masuk','Otentikasi\OtentikasiController@login');
Route::get('/adm/tambah','Otentikasi\OtentikasiController@create');
Route::post('/tambah','Otentikasi\OtentikasiController@store');
Route::get('/adm','Otentikasi\OtentikasiController@list');
Route::get('logout','Otentikasi\OtentikasiController@logout');


Route::get('/fakultas','FakultasController@index');
Route::get('/fakultas/create','FakultasController@create');
Route::get('/fakultas/cetak','FakultasController@cetak');
Route::post('/fakultas','FakultasController@store');
Route::get('/fakultas/{fakultas}','FakultasController@show');
route::get('/fakultas/{fakultas}/edit','FakultasController@edit');
route::patch('/fakultas/{fakultas}','FakultasController@update');
route::delete('/fakultas/{fakultas}','FakultasController@destroy');

Route::get('/prodi','ProdiController@index');
Route::get('/prodi/create','ProdiController@create');
Route::get('/prodi/cetak','ProdiController@cetak');
Route::get('/prodi/cari','ProdiController@cari');
Route::post('/prodi','ProdiController@store');
Route::get('/prodi/{prodi}','ProdiController@show');
route::get('/prodi/{prodi}/edit','ProdiController@edit');
route::patch('/prodi/{prodi}','ProdiController@update');
route::delete('/prodi/{prodi}','ProdiController@destroy');

Route::get('/pendidik','PendidikController@index');
Route::get('/pendidik/create','PendidikController@create');
Route::get('/pendidik/cetak','PendidikController@cetak');
Route::get('/pendidik/cari','PendidikController@cari');
Route::post('/pendidik','PendidikController@store');
Route::get('/pendidik/{pendidik}','PendidikController@show');
route::get('/pendidik/{pendidik}/edit','PendidikController@edit');
route::patch('/pendidik/{pendidik}','PendidikController@update');
route::delete('/pendidik/{pendidik}','PendidikController@destroy');

Route::get('/kependidikan','KependidikanController@index');
Route::get('/kependidikan/create','KependidikanController@create');
Route::get('/kependidikan/cetak','KependidikanController@cetak');
Route::get('/kependidikan/cari','KependidikanController@cari');
Route::post('/kependidikan','KependidikanController@store');
Route::get('/kependidikan/{kependidikan}','KependidikanController@show');
route::get('/kependidikan/{kependidikan}/edit','KependidikanController@edit');
route::patch('/kependidikan/{kependidikan}','KependidikanController@update');
route::delete('/kependidikan/{kependidikan}','KependidikanController@destroy');

Route::get('/matkul','MapelController@index');
Route::get('/matkul/create','MapelController@create');
Route::get('/matkul/cetak','MapelController@cetak');
Route::get('/matkul/cari','MapelController@cari');
Route::post('/matkul','MapelController@store');
Route::get('/matkul/{matkul}','MapelController@show');
route::get('/matkul/{matkul}/edit','MapelController@edit');
route::patch('/matkul/{matkul}','MapelController@update');
route::delete('/matkul/{matkul}','MapelController@destroy');

Route::get('/kelas','KelasController@index');
Route::get('/kelas/create','KelasController@create');
Route::get('/kelas/cetak','KelasController@cetak');
Route::get('/kelas/cari','KelasController@cari');
Route::post('/kelas','KelasController@store');
Route::get('/kelas/{kelas}','KelasController@show');
route::get('/kelas/{kelas}/edit','KelasController@edit');
route::patch('/kelas/{kelas}','KelasController@update');
route::delete('/kelas/{kelas}','KelasController@destroy');

Route::get('/jadwal','JadwalController@index');
Route::get('/jadwal/create','JadwalController@create');
Route::get('/jadwal/cetak','JadwalController@cetak');
Route::get('/jadwal/cari','JadwalController@cari');
Route::post('/jadwal','JadwalController@store');
Route::get('/jadwal/{jadwal}','JadwalController@show');
route::get('/jadwal/{jadwal}/edit','JadwalController@edit');
route::patch('/jadwal/{jadwal}','JadwalController@update');
route::delete('/jadwal/{jadwal}','JadwalController@destroy');

Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/create','MahasiswaController@create');
Route::get('/mahasiswa/cetak','MahasiswaController@cetak');
Route::get('/mahasiswa/cari','MahasiswaController@cari');
Route::post('/mahasiswa','MahasiswaController@store');
Route::get('/mahasiswa/{mahasiswa}','MahasiswaController@show');
route::get('/mahasiswa/{mahasiswa}/edit','MahasiswaController@edit');
route::patch('/mahasiswa/{mahasiswa}','MahasiswaController@update');
route::delete('/mahasiswa/{mahasiswa}','MahasiswaController@destroy');
