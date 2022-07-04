<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;

use App\Models\User;

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
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    echo "This is Home Page";
});
Route::get('/about', function () {
    return view('about');
});;
Route::get('/contact', [ContactController::class, 'index'])->name("Anik");

// Category Route
Route::get('/category/all', [CategoryController::class, 'cat'])->name("All.Category");
Route::post('/category/add', [CategoryController::class, 'add'])->name("add.category");
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name("edit.category");
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name("update.category");
Route::get('softdelete/category/{id}', [CategoryController::class, 'softdelete'])->name("softdelete.category");
Route::get('category/restore/{id}', [CategoryController::class, 'restore'])->name("restore.category");
Route::get('pdelete/category/{id}', [CategoryController::class, 'pdelete'])->name("pdelete.category");


// Brand Route
Route::get('/brands/all', [BrandsController::class, 'all'])->name("all.brands");
Route::post('/brands/add', [BrandsController::class, 'add'])->name("add.brand");
Route::get('/brands/edit/{id}', [BrandsController::class, 'edit'])->name("edit.brands");
Route::post('/brands/update/{id}', [BrandsController::class, 'update'])->name("update.brands");
Route::get('brand/delete/{id}', [BrandsController::class, 'delete'])->name("delete.brand");

//Multi Pic
Route::get('/multi/pic', [BrandsController::class, 'multipic'])->name("multi.image");
Route::post('/multi/add', [BrandsController::class, 'StoreImg'])->name("store.img");

//employe routes
Route::get('departments',[DepartmentController::class,'index'])->name('departments');
Route::post('departments',[DepartmentController::class,'store']);
Route::put('departments',[DepartmentController::class,'update']);
Route::delete('departments',[DepartmentController::class,'destroy'])->name('department.destroy');

Route::get('designations',[DesignationController::class,'index'])->name('designations');
Route::put('designations',[DesignationController::class,'update']);
Route::post('designations',[DesignationController::class,'store']);
Route::delete('designations',[DesignationController::class,'destroy'])->name('designation.destroy');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
      // $users=User::all();
      //  $users=DB::table('users')->get();
        return view('admin.index');
    })->name('dashboard');
});
Route::get('/user/logout', [BrandsController::class, 'logout'])->name("user.logout");
