<?php

use App\Http\Controllers\BlockController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;


Route::get('/', function () {
    return view('estateagency.pages.blog-grid');
});

Route ::get('/home', function (){
    return "Hola Mundo";
});

Route::get('/curso/crear', function (){
    return "Aqqui vamos a crear un curso";
});

Route ::get('/cursos', function (){
    return "Bienvenido a los cursos";
});


Route ::get('/curso/eliminar', function (){
    return "Aqui vamos a eliminar el curso: ";
});

Route ::get('/curso/eliminar/{palabra}', function ($palabra){
    return "Aqui vamos a eliminar el curso: " .$palabra;
});

Route::get('/cursos/new' , [CursoController ::class,'nuevo']);

Route::resource('block', BlockController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
