<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', [SiteController::class, 'pagina1']);
Route::get('/end', [SiteController::class, 'pagina1']);


    
