<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


// todas las rutas vinculadas -- controlador de recurso
Route::resource('/note', NoteController::class);
