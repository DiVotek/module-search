<?php

use Illuminate\Support\Facades\Route;
use Modules\Search\Controllers\SearchController;

Route::get('search', [SearchController::class, 'search'])->name('search');
