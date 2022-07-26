<?php

use Illuminate\Support\Facades\Route;
use Modules\Ads\Http\Controllers\Api\AdsController;
use Modules\Ads\Http\Controllers\Api\CategoryController;

Route::apiResource('categories', CategoryController::class);

Route::apiResource('ads', AdsController::class);

Route::get('advertisers/{id}/ads', [AdsController::class, 'getAdvertiserAds']);

Route::get('filter/ads', [AdsController::class, 'getFilteredAds']);
