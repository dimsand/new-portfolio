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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// FRONT
Route::get('/', 'HomeController@index')->name('home');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// BACK ADMIN

// Dashboard
Route::get('/admin', 'AdminController@dashboard')->name('admin_dashboard');

// Infos site
Route::get('/admin/infosSite', 'AdminController@infos_site')->name('admin_infos_site');

// Compétences
Route::get('/admin/competences', 'AdminController@competences')->name('admin_competences');

// Expérience
Route::get('/admin/experience', 'AdminController@experience')->name('admin_experience');

// Projets
Route::get('/admin/projets', 'AdminController@projets')->name('admin_projets');
Route::get('/admin/add', 'AdminController@addProjetForm')->name('admin_add_project');
Route::post('/admin/addProjet', 'AdminController@addProjet')->name('admin_add_project_form');

// Media
Route::get('/admin/media', 'AdminController@media')->name('admin_media');
