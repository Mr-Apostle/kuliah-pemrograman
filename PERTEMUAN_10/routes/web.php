<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () { 
return view('index'); 
}); 
Route::get('/menu', function () { 
return view('menu'); 
}); 
Route::get('/pesan', function () { 
return view('pesan'); 
}); 