<?php

use App\Http\Controllers\Admin\CapacitationController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProfessorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Invoice\StudentController as InvoiceStudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\HomeController;
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
    Route::get('/admin/subject', [SubjectController::class, 'index'])
        ->name('admin.subject.index');
    Route::get('/admin/group', [GroupController::class, 'index'])
        ->name('admin.group.index');
    Route::get('/invoice/student', [InvoiceStudentController::class, 'index'])
        ->name('invoice.student.index');

    /* Route::get('/admin/inscription', [InscriptionController::class, 'index'])
        ->name('admin.inscription.index');
     *//* Route::get('/admin/schedule/capacitacion', [ScheduleCapacitationController::class, 'index'])
        ->name('admin.schedule.capacitation.index'); */
    /* Route::get('/admin/capacitation-student.index', [CapacitationStudentController::class, 'index'])
        ->name('admin.capacitation-student.index'); */
});

/* Hacer 3 entradas a tres dashboard diferentes */
