<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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
    return redirect(route("login"));
});

Route::middleware(["auth"])->prefix("admin/")->name("admin.")->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    // User
    Route::resource("user", UserController::class)->except(["show"]);
    Route::get('/user/change-password', [UserController::class, 'changePasswordIndex'])->name("user.changePasswordIndex");
    Route::post('/user/change-password', [UserController::class, 'changePassword'])->name("user.changePassword");
    // Category
    Route::get("category/{mode?}", [CategoryController::class, "index"])
        ->name("category.index")->defaults("mode", "web");
    Route::resource("category", CategoryController::class)->except(["show", "index"]);
    Route::resource("setting", SettingController::class)->except(["show"]);
    Route::resource("roles", RoleController::class)->except(["show"]);

    // TEST 
    Route::view("builder", "admin.builder")->name("builder");
});
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
