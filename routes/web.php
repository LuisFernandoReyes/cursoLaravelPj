<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CursoController;

Route::get('/', [CursoController::class, 'getName'])->name('home');

Route::get('/index', [CursoController::class, 'index'])->name('index');

Route::get('/hola', function() {
    return route('hola');
})->name('hola');

Route::get('/suma',[CursoController::class, 'suma'])->name('sumota');
Route::get('/resta',[CursoController::class, 'resta'])->name('resta');
Route::get('/multiplicacion',[CursoController::class, 'multiplicacion'])->name('multi');
Route::get('/division',[CursoController::class, 'division'])->name('div');


//Indica que va a recibir un valor
Route::get('/suma/{X}/{Y}', function($x,$y) {
    return "La suma es: ".$x+$y;
})->name('sumaDosNum');

Route::get('/nombre/{name?}', function($nombre) {
    return "El nombre es: ".$nombre;
})->name('nombresote');

Route::get('/nombre/{name?}', function($nombre='Juan') {
    return "El nombre es: ".$nombre;
})->where('name', '[A-Za-z]+');

Route::get('/sumaNumbers/{x}/{y}', function ($x, $y) {
    $a = [1, 2, 3, 4];
    $aa = ['nombre' => 'Juan', 'apellido' => 'Perez'];
    return 'La suma es: ' . ($x + $y);
})->where(['x' => '[0-9]+', 'y' => '[0-9]+']);

Route::redirect('/sumar', '/cursoLaravelPj/public/suma');

Route::get('verificar', function (Request $request) {
    if ($request->route()->getName() == 'hola') {
        return "ok";
    } else {
        return "Nope";
    }
})->name('verificar');

Route::prefix('admin')->group(function () {
    Route::get('/primero', function () {
        return 'Primero';
    })->name('admin.primero'); // Corrección en el nombre

    Route::get('/segundo', function () {
        return 'Segundo';
    })->name('admin.segundo');
});

