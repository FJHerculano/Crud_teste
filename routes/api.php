<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rotas de criação de projeto
Route::get('/projects', [ProjectsController::class, 'getProjects']);
Route::get('/projects/{id}', [ProjectsController::class, 'showProject']);
Route::post('/projects', [ProjectsController::class, 'createProject']);

Route::patch('/projects/{id}', [ProjectsController::class, 'updateProject']);
Route::delete('/projects/{id}', [ProjectsController::class, 'deleteProject']);