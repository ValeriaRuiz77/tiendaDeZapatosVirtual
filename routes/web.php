<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\Producto1Controller;

Route::resource('producto1s', Producto1Controller::class);

