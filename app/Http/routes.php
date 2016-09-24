<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use \Kaas\Controllers\QuotesController;


$app->get('/', function () use ($app) {
    return view('index');
});

$app->group(['prefix' => 'api', 'middleware' => ['doTheyWantYouToSucceed']], function() use ($app) {

    $app->get('quote', function () {
        return QuotesController::getResponse();
    });
}
);
