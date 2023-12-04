<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AgentController::class, 'index'])->name('agent.index');
Route::get('create', [AgentController::class, 'create'])->name('agent.create');
Route::post('store', [AgentController::class, 'store'])->name('agent.store');