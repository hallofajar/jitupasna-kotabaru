<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\DashboardController;

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

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
	Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/maps', [DashboardController::class, 'maps'])->name('maps');
	Route::get('/all-resume', [DashboardController::class, 'allResume'])->name('all.resume');
	Route::get('/list/{region}', [DashboardController::class, 'listResponden'])->name('dashboard.list');
	Route::get('/detail/{region}/{id}', [DashboardController::class, 'detailResponden'])->name('user.respon.detail');
	Route::get('/resume/{region}', [DashboardController::class, 'resume'])->name('dashboard.resume');
	Route::get('/resume/print/{region}', [DashboardController::class, 'printResume'])->name('dashboard.resume.print');
	Route::get('/crosstab', [DashboardController::class, 'Crosstab'])->name('dashboard.crosstab');
	Route::get('/crosstab/all-crosstab', [DashboardController::class, 'CrosstabAll'])->name('all.crosstab');
	Route::get('/tablecrosstab/{region}', [DashboardController::class, 'tablecrosstab'])->name('dashboard.tablecrosstab');
	Route::get('/tablecrosstabAll', [DashboardController::class, 'tablecrosstaball'])->name('dashboard.tablecrosstab.all');
});

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
