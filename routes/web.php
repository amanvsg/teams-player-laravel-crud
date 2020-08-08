<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






//////////--------------------------------
Route::get('team',[
     'uses'=>'TeamController@loadUIForOneTeamAndGetTeamName',
     'as'  =>'team'
]);

Route::post('team-details',[
     'uses' => 'TeamController@FetchTeamDetails',
     'as' => 'team-details'
]);

Route::get('team-details-players/{id}',[
      'uses'=>'TeamController@TeamPlayersDetails',
      'as'  =>'team-details-players'
]);

Route::get('/teams',[
    'uses'=>'TeamController@index',
    'as'=>'teams'
]);

Route::post('/teams/store',[
      'uses'=>'TeamController@store',
      'as'  =>'teams.store'
]);


Route::get('/teams/add', [
    'uses'=>'TeamController@create',
    'as' =>'teams.add'
    ]);


Route::get('/teams/edit/{id}',[
        'uses'=>'TeamController@edit',
        'as'=>'teams.edit'
    ]);
    

Route::post('/team/update',[
        'uses'=>'TeamController@update',
        'as'=>'teams.update'
       
]);


Route::get('/teams/delete/{id}',[
        'uses'=>'TeamController@destroy',
        'as'=>'teams.delete'
    ]);

////////////// ----------------------


Route::get('/players',[
    'uses'=>'PlayerController@index',
    'as'=>'players',
]);


Route::get('player/add',[
     'uses'=>'PlayerController@create',
     'as'=>'player.add'
]);

Route::post('player/store',[
    'uses'=>'PlayerController@store',
    'as'  =>'player.store'
]);

Route::get('player',[
     'uses' => 'PlayerController@loadUIForOnePlayerAndGetTeamName',
     'as'   =>  'player'
]);

//player-details

Route::post('player-details',[
    'uses'=>'PlayerController@FetchPlayerDetails',
    'as'  =>'player-details'
]);

Route::get('player/edit/{id}',[
    'uses'=>'PlayerController@edit',
    'as'  =>'player.edit'
]);

Route::post('player/update',[
     'uses'=>'PlayerController@update',
     'as'  =>'player.update'
]);

Route::get('player/delete/{id}',[
    'uses'=>'PlayerController@destroy',
    'as'  =>'player.delete'
]);

