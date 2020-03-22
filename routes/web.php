<?php

use App\Exports\AsistenciasExport;

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
Route::auth();
Route::get('/', ['uses' => 'HomeController@home']);
Route::get('qrLogin', ['uses' => 'QrLoginController@index']);
Route::get('lectorQR', ['uses' => 'QrLoginController@indexoption2']);
Route::post('qrLogin', ['uses' => 'QrLoginController@checkUser']);


 Route::group(['middleware' => ['web', 'auth', 'permission'] ], function () {
        Route::get('dashboard', ['uses' => 'HomeController@dashboard', 'as' => 'home.dashboard']);
        //users
        Route::resource('user', 'UserController');
        Route::get('user/logout/now', ['uses' => 'Auth\LoginController@logout']);
        Route::get('user/{user}/permissions', ['uses' => 'UserController@permissions', 'as' => 'user.permissions']);
        Route::post('user/{user}/save', ['uses' => 'UserController@save', 'as' => 'user.save']);
        Route::get('user/{user}/activate', ['uses' => 'UserController@activate', 'as' => 'user.activate']);
        Route::get('user/{user}/deactivate', ['uses' => 'UserController@deactivate', 'as' => 'user.deactivate']);
          Route::post('user/ajax_all', ['uses' => 'UserController@ajax_all']);

        //roles
        Route::resource('role', 'RoleController');
        Route::get('role/{role}/permissions', ['uses' => 'RoleController@permissions', 'as' => 'role.permissions']);
        Route::post('role/{role}/save', ['uses' => 'RoleController@save', 'as' => 'role.save']);
        Route::post('role/check', ['uses' => 'RoleController@check']);
        //Update User Qr Code
        Route::get('my-qrcode', ['uses' => 'QrLoginController@ViewUserQrCode']);
        Route::post('qrLogin-autogenerate', ['uses' => 'QrLoginController@QrAutoGenerate']);
 });


 Route::get('createcapaci','capacitacion@createcapaci')->name('createcapaci');
 Route::post('guardacapacitacion','capacitacion@guardacapacitacion')->name('guardacapacitacion');
 Route::get('capacitaciones','capacitacion@listacapacitacion')->name('listacapacitacion');
 Route::get('asistencia','Asistencia@asistencia')->name('asistencia');
 Route::get('iniciarcapa/{id}', 'capacitacion@iniciarcapa')->name('iniciarcapa');
 Route::get('lector','Asistencia@lector')->name('lector');
 Route::post('crear','Asistencia@crear')->name('crear');
 Route::get('desactivarcapa/{id}','capacitacion@desactivarcapa')->name('desactivarcapa'); //desactivatr capacitación
 Route::get('buscarasistencia/', 'Asistencia@buscarasistencia')->name('buscarasistencia'); 

//calendar
 Route::get('event/add','EventController@createEvent')->name('eventadd');
 Route::post('event/add','EventController@store');
 Route::get('event','EventController@calender');
 Route::get('eventPublic','EventController@calenderpublic');
 
 // excel

 Route::get('users/export/', 'UsersController@export');


 Route::get('Asistencias/export/', 'Asistencia@export')->name('export');

 Route::get('AsistenciasGenerales/export/', 'Asistencia@exportcomplete')->name('exportcomplete');

 Route::get('excel', function (AsistenciasExport $asistenciasExport ){

// $asistenciasExport->store('Asistencias.xlsx','public'); 

// $asistenciasExport->store('Asistencias.pdf','public');

// $asistenciasExport->store('Asistencias.htm','public');

// $asistenciasExport->store('Asistencias.csv','public');


return $asistenciasExport;


return 'Listo';

 });

