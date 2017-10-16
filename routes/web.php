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

Auth::routes();

// FRONT
Route::get('/', 'HomeController@index')->name('home');

// BACK ADMIN
Route::get('/admin', 'AdminController@dashboard')->name('admin_dashboard');
Route::get('/admin/infosSite', 'AdminController@infos_site')->name('admin_infos_site');
Route::get('/admin/competences', 'AdminController@competences')->name('admin_competences');
Route::get('/admin/experience', 'AdminController@experience')->name('admin_experience');
Route::get('/admin/projets', 'AdminController@projets')->name('admin_projets');
Route::get('/admin/media', 'AdminController@media')->name('admin_media');
