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

	$client = new Client();

	$response = $client->request('GET', 'https://api.github.com/zen');
	$statusCode = $response->getStatusCode();
	$body = $response->getBody()->getContents();

    return view('welcome', ['value' => $body]);
});

Route::get('/repos', function () {

	$client = new Client();

	$response = $client->request('GET', 'https://api.github.com/users/alexandremcs/repos');
	$statusCode = $response->getStatusCode();
	$body = $response->getBody()->getContents();

    //return view('welcome', ['value' => $body]);

    $objs = json_decode($body);

    foreach ($objs as $obj) {
        echo $obj->id . ' - ' . $obj->name;
        echo '<br>';
    }

    return null;
});
