<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiYWE5ZDViYWQzYWE5ZmE4MWQyYjE0NmU5YTY3ZTRlMGI2Y2NmMDE1YmE4ZTk2MjZmZWJiNWYwNjgyZmQyMTIyZmY0MjViZDlhNjc3M2Y4YWQiLCJpYXQiOjE2MTgwODMzNjcuOTExODU2LCJuYmYiOjE2MTgwODMzNjcuOTExODcyLCJleHAiOjE2NDk2MTkzNjcuNzIwMjksInN1YiI6IiIsInNjb3BlcyI6W119.c0gRgXFn0ku7_1KJ8F1qJ3GvwKR8wKhNV_CFya8z7gB_A4REv_HZHOtJuvkAziG6JarIDz4KOjAPXZYWdjxHHF1M9CaZ6fdFtpEpvqsTeAjKiH7hi9rg-3SttaJjx5dbCwId8qmsAH4eUHSU_fG0ra2QztjOC1NvFhERv-TcyUBszaEcdcW0i9fgCwZGPJ1_ieoef0YTwkdwZyLh7OVn1U-XK4QrOG8k-Byyxz8ScZp9uI4ZVqRd5IaB_oz1sJSa_BkTBAek89LcJHKujOB3yNPR7hLXbD3OLHAjeGNUgpLcIaUKZP5AmKqPZ_hEFs10G1ZKFyCYD_LWY2FM_Rvdsy2noYm1Gr1Em90fmPQuaAXuJ-f5AdGX_nDiR_Wkp3-TVvixcJs8scWp_lHQw4W110M3i-YHPkBuyhu6MMFEYm9ay58mYeFD__AuiNjNZbG7GRrYFsHbBNEct7oZ8EdpG9hVL4uApdJ9VRW9lIrNnm20EvF7qE7moQXhYt5igpSwKo8DdFw9lmX0XW6WjCjtW_mCz9xBzs-TnvzaV1MNwBRNF2ouDBT7frkax6aXmMOvh2nSBXvgBKxVKoUzLvMR1jcRAwxixj-LaJfhxVFtQegEC7RfBH_6b1REuq94--f8Hhl983P61gZo7yy83wm_rmaPAjhx5EIuRYRBQEQy9G4"
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::get('getnames','FullnameController@index');
Route::get('getnamesbyid/{id}','FullnameController@getnamesbyid');
Route::post('insertdata','FullnameController@insertdata');
Route::put('updatedata/{id}','FullnameController@updatedata');
Route::delete('deletedata/{id}','FullnameController@deletedata');
*/
Route::group(['middleware'=>'auth:api'],function ()
{
    # code... 
    //for Bearer Route::apiResource('go','FullnameController');
   
  
  
});
//now using basic authntication  authBasic

Route::apiResource('go','FullnameController');
Route::get('download','FullnameController@download');
Route::post('upload','FullnameController@upload');
