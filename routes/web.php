<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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


Route::get('/cursos')



