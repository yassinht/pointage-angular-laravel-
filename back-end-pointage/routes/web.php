<?php





Route::get('/', function () {
    return view('welcome');
});

/*utilisateur */
Route::get('utilisateur','App\Http\Controllers\UtilisateurController@getUtilisateur');
Route::post('/addutilisateur','App\Http\Controllers\UtilisateurController@addUtilisateur');
Route::delete('/deleteutilisateur/{id}','App\Http\Controllers\UtilisateurController@deleteUtilisateur'); 
Route::patch('/updateutilisateur/{id}','App\Http\Controllers\UtilisateurController@updateUtilisateur'); 
Route::get('/getoneutilisateur/{id}','App\Http\Controllers\UtilisateurController@getOneUtilisateur');


/*employee */

Route::get('employe','App\Http\Controllers\EmployeController@getEmploye');
Route::post('/addemploye','App\Http\Controllers\EmployeController@addEmploye');
Route::delete('/deleteemploye/{id}','App\Http\Controllers\EmployeController@deleteEmploye'); 
Route::patch('/updateemploye/{id}','App\Http\Controllers\EmployeController@updateEmploye'); 
Route::get('/getoneemploye/{id}','App\Http\Controllers\EmployeController@getOneEmploye');

/*maagasin */
Route::get('magasin','App\Http\Controllers\MagasinController@getMagasin');
Route::post('/addmagasin','App\Http\Controllers\MagasinController@addMagasin');
Route::delete('/deletemagasin/{id}','App\Http\Controllers\MagasinController@deleteMagasin'); 
Route::patch('/updatemagasin/{id}','App\Http\Controllers\MagasinController@updateMagasin'); 
Route::get('/getonemagasin/{id}','App\Http\Controllers\MagasinController@getOneMagasin');
/*demande planification */
Route::get('demandeplan','App\Http\Controllers\DemandeplanController@getDemandeplan');
Route::post('/adddemandeplan','App\Http\Controllers\DemandeplanController@addDemandeplan');
Route::delete('/deletedemandeplan/{id}','App\Http\Controllers\DemandeplanController@deleteDemandeplan'); 
Route::patch('/updatedemandeplan/{id}','App\Http\Controllers\DemandeplanController@updateDemandeplan'); 
Route::get('/getonedemandeplan/{id}','App\Http\Controllers\DemandeplanController@getOneDemandeplan');

/*societe service*/

Route::get('societee','App\Http\Controllers\SocieteeController@getSocietee');
Route::post('/addsocietee','App\Http\Controllers\SocieteeController@addSocietee');