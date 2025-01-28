<?php

use App\Http\Controllers\Admin\CapacitationController;
use App\Http\Controllers\Admin\ProfessorController;
use App\Http\Controllers\Admin\ScheduleCapacitationController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\HomeController;
use Illuminate\Console\Scheduling\ScheduleListCommand;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('dashboard');
    Route::get('/admin/professor', [ProfessorController::class, 'index'])
        ->name('admin.professor.index');
    Route::get('/admin/student', [StudentController::class, 'index'])
        ->name('admin.student.index');
    Route::get('/admin/capacitation', [CapacitationController::class, 'index'])
        ->name('admin.capacitation.index');
    Route::get('/admin/schedule/capacitacion', [ScheduleCapacitationController::class, 'index'])
        ->name('admin.schedule.capacitation.index');
});

/* Hacer 3 entradas a tres dashboard diferentes */
