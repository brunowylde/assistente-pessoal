<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RotinaDiaria;

# rotinas diárias
Route::get('rotinas-diarias', [RotinaDiaria::class, 'get']);