<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentsController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\BirthdaysController;
use App\Http\Controllers\EventsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [BirthdaysController::class, 'index']);

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/modelo', function () {
    return view('layouts.modelo');
});

//Rotas RAMAL
Route::get('/branch', [BranchesController::class, 'index']);
Route::get('/branch/new', [BranchesController::class, 'create']);
Route::post('/branch/new', [BranchesController::class, 'store']);
Route::get('/branch/edit/{id}', [BranchesController::class, 'edit']);
Route::post('/branch/edit/{id}', [BranchesController::class, 'update']);
Route::get('/branch/delete/{id}', [BranchesController::class, 'delete']);
Route::post('/branch/delete/{id}', [BranchesController::class, 'destroy']);
Route::get('/branch/order/{id}', [BranchesController::class, 'order']); //função para ordenar a tabela

//Rotas EMAIL
Route::get('/emails', [EmailController::class, 'index']);
Route::get('/emails/new', [EmailController::class, 'create']);
Route::post('/emails/new', [EmailController::class, 'store']);
Route::get('/emails/edit/{id}', [EmailController::class, 'edit']);
Route::post('/emails/edit/{id}', [EmailController::class, 'update']);
Route::get('/emails/delete/{id}', [EmailController::class, 'delete']);
Route::post('/emails/delete/{id}', [EmailController::class, 'destroy']);
Route::get('/ordenar/{id}', [EmailController::class, 'order']); //função para ordenar a tabela

//Rotas Aniversarios
Route::get('/birthday', [BirthdaysController::class, 'index']);
Route::get('/birthday/new', [BirthdaysController::class, 'create']);
Route::post('/birthday/new', [BirthdaysController::class, 'store']);
Route::get('/birthday/edit/{id}', [BirthdaysController::class, 'edit']);
Route::post('/birthday/edit/{id}', [BirthdaysController::class, 'update']);
Route::get('/birthday/delete/{id}', [BirthdaysController::class, 'delete']);
Route::post('/birthday/delete/{id}', [BirthdaysController::class, 'destroy']);

//Rotas Fotos
Route::get('/events', [EventsController::class, 'index']);
Route::get('/events/new', [EventsController::class, 'create']);
Route::post('/events/new', [EventsController::class, 'store']);
Route::get('/events/edit/{id}', [EventsController::class, 'edit']);
Route::post('/events/edit/{id}', [EventsController::class, 'update']);
Route::get('/events/delete/{id}', [EventsController::class, 'delete']);
Route::post('/events/delete/{id}', [EventsController::class, 'destroy']);
Route::get('/events/view2/{id}', [EventsController::class,'view2']);

//Rotas Recrutamento
Route::get('/recru/novo', [RecruitmentsController::class,'create'])->middleware('auth');
Route::post('/recru/novo', [RecruitmentsController::class, 'store']);
Route::get('/recru/cadastro/{id}', [RecruitmentsController::class, 'show'])->middleware('auth');
Route::get('/recru/lista', [RecruitmentsController::class, 'show2']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
