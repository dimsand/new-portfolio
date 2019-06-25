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

Route::post('contact', ['as'=>'contact.store','uses'=>'HomeController@contact']);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// BACK ADMIN

// Dashboard
Route::get('/admin', 'AdminController@dashboard')->name('admin_dashboard');

// Infos site
Route::get('/admin/infosSite', 'AdminController@infos_site')->name('admin_infos_site');

// Compétences
Route::get('/admin/competences', 'Admin\CompetencesController@index')->name('admin_competences');
Route::get('/admin/competences/add', 'Admin\CompetencesController@add')->name('admin_add_competence');
Route::post('/admin/competences/add-competence', 'Admin\CompetencesController@addCompetence')->name('admin_add_competence_form');
Route::get('/admin/competences/edit/{id}', 'Admin\CompetencesController@edit')->name('admin_edit_competence');
Route::post('/admin/competences/store/{id}', 'Admin\CompetencesController@store')->name('admin_edit_competence_form');
Route::delete('/admin/competences/delete/{id}', 'Admin\CompetencesController@delete')->name('admin_delete_competence');

// Expérience
Route::get('/admin/experience', 'Admin\ExperienceController@index')->name('admin_experience');
Route::get('/admin/experience/add', 'Admin\ExperienceController@add')->name('admin_add_experience');
Route::post('/admin/experience/add-competence', 'Admin\ExperienceController@addExperience')->name('admin_add_experience_form');
Route::get('/admin/experience/edit/{id}', 'Admin\ExperienceController@edit')->name('admin_edit_experience');
Route::post('/admin/experience/store/{id}', 'Admin\ExperienceController@store')->name('admin_edit_experience_form');
Route::delete('/admin/experience/delete/{id}', 'Admin\ExperienceController@delete')->name('admin_delete_experience');

// Projets
Route::get('/admin/projets', 'AdminController@projets')->name('admin_projets');
Route::get('/admin/add', 'AdminController@addProjetForm')->name('admin_add_project');
Route::get('/admin/ajax_getGithubProjects', 'AdminController@ajax_getGithubProjects')->name('ajax_getGithubProjects');
Route::post('/admin/addProjet', 'AdminController@addProjet')->name('admin_add_project_form');
Route::get('/admin/editProject/{id}', 'AdminController@editProject')->name('admin_edit_project');
Route::post('/admin/editProject/{id}', 'AdminController@editProjetForm')->name('admin_edit_project_form');
Route::delete('/admin/deleteProject/{id}', 'AdminController@deleteProject')->name('admin_delete_project');

// Media
Route::get('/admin/media', 'AdminController@media')->name('admin_media');

