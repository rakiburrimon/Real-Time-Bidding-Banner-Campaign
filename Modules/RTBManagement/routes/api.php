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
    |
*/

Route::prefix('v1')->name('api.v1.')->group(function () {
    Route::get('/campaigns', 'API\V1\CampaignController@index')->name('campaigns.index');
    Route::get('/campaigns/{id}', 'API\V1\CampaignController@show')->name('campaigns.show');
    Route::post('/campaigns', 'API\V1\CampaignController@store')->name('campaigns.store');

    Route::get('/campaigns/{campaign_id}/bids', 'API\V1\BidRequestController@index')->name('campaigns.bids.index');
    Route::get('/campaigns/{campaign_id}/bids/{bid_id}', 'API\V1\BidController@show')->name('campaigns.bids.show');
    Route::post('/bids', 'API\V1\BidController@store')->name('bids.store');
});
