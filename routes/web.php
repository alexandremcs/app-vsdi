<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;


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

    $dataehora = date("l jS \of F Y h:i:s A");

    $myfile = fopen("log.txt", "a");
    fwrite($myfile, 'Data: '.$dataehora.", URL: / \n");
    fclose($myfile);

	return view('home');
});

Route::get('/{login}', function ($login) {    
    
    $client = new Client();

    try {
        $response = $client->request('GET', 'https://api.github.com/users/'.$login.'/repos');
    } catch (Exception $e) {
        $dataehora = date("l jS \of F Y h:i:s A");

        $myfile = fopen("log.txt", "a");
        fwrite($myfile, 'Data: '.$dataehora.", URL: /".$login." \n");
        fclose($myfile);
        return view('404');
    }   

    $statusCode = $response->getStatusCode();
	$body = $response->getBody()->getContents();

    $objs = json_decode($body);

    $dataehora = date("l jS \of F Y h:i:s A");

    $myfile = fopen("log.txt", "a");
    fwrite($myfile, 'Data: '.$dataehora.", URL: /".$login." \n");
    fclose($myfile);

    return view('repos', ['objarray' => $objs]);
});