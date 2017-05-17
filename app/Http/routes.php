<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('doctor', array('as' => 'read_doctors', 'uses' => 'DoctorController@show'));
Route::get('doctor/{id}', array('as' => 'read_doctor', 'uses' => 'DoctorController@get'));
Route::get('doctor/{id}/appointment', array('as' => 'read_doctor_appointments', 'uses' => 'DoctorController@getAppointments'));
Route::match('[get, delete]', 'doctor/{id}/delete', 'DoctorController@delete');
Route::get('doctor/{id}/appointment/{id2}', 'DoctorController@getAppointment');
Route::get('doctor/speciality/{id}', 'DoctorController@getBySpeciality');
Route::match('[get, delete]', 'patient/{id}/delete', 'PatientController@delete');
Route::get('patient/{id}', 'PatientController@get');
Route::get('patient/{id}/appointment', 'PatientController@getAppointments');
Route::get('patient/{id}/appointment/{id2}', 'PatientController@getAppointment');
Route::get('patient', 'PatientController@show');
Route::match('[get, delete]', 'appointment/{id}/delete', 'AppointmentController@delete');
Route::get('appointment/{id}', 'AppointmentController@get');
Route::get('appointment', 'AppointmentController@show');
Route::get('speciality/{id}', 'SpecialityController@get');
Route::get('speciality', 'SpecialityController@show');