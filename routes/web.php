<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $totalStudents = \App\Models\Student::count();
    $totalApps =  314; //\App\Models\App::count();
    $totalCourses = \App\Models\Course::count();
    $totalPortfolios =  34; //\App\Models\Portfolio::count();
    $totalProjects =  \App\Models\Project::count();
    return view('dashboard')
        ->with('totalStudents', $totalStudents)
        ->with('totalApps', $totalApps)
        ->with('totalCourses', $totalCourses)
        ->with('totalPortfolios', $totalPortfolios)
        ->with('totalProjects', $totalProjects);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('students', StudentController::class);
    Route::resource('apps', AppController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('projects', ProjectController::class);
});

require __DIR__ . '/auth.php';
