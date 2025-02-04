<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\{
    // register new controllers here
    DashboardController,
    ProfileController


};


Route::get('/', function () {
    return view('welcome');
})->name('Home');


// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard Routes
Route::middleware(['auth', 'verified', AdminAuth::class])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    

});

require __DIR__.'/auth.php';
