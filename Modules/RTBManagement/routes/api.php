<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\RTBManagement\App\Http\Controllers\api\v1\AuctionController;
use Modules\RTBManagement\App\Http\Controllers\api\v1\BidController;
use Modules\RTBManagement\App\Http\Controllers\api\v1\BidRequestController;
use Modules\RTBManagement\App\Http\Controllers\api\v1\CampaignController;

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

Route::middleware('auth:sanctum')->prefix('v1')->name('api.v1.')->group(function () {
     // Campaign routes
     Route::get('/campaigns', [CampaignController::class, 'index'])->name('campaigns.index');
     Route::get('/campaigns/{id}', [CampaignController::class, 'show'])->name('campaigns.show');
     Route::post('/campaigns', [CampaignController::class, 'store'])->name('campaigns.store');

     // Bid request routes
     Route::post('/bid-requests', [BidRequestController::class, 'store'])->name('bid-requests.store');

     // Auction routes
     Route::get('/auctions', [AuctionController::class, 'index'])->name('auctions.index');
     Route::get('/auctions/{id}', [AuctionController::class, 'show'])->name('auctions.show');
     Route::post('/auctions', [AuctionController::class, 'store'])->name('auctions.store');

     // Bid routes
     Route::get('/campaigns/{campaign_id}/bids', [BidController::class, 'index'])->name('bids.index');
     Route::get('/campaigns/{campaign_id}/bids/{bid_id}', [BidController::class, 'show'])->name('bids.show');
 });
