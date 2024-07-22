<?php

use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index']);
