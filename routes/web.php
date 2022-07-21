<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\UserinfoController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\PayGradeController;
use App\Http\Controllers\EmploymentStatusController;
use App\Http\Controllers\GeneralInfoController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\QualController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\LicensesController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\DeptController;
use App\Http\Controllers\MembershipsController;
use App\Http\Controllers\NationalitiesController;
use App\Models\User;
use App\Models\Pay_grades;

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


// UserInfo
Route::get('userinfo',[UserinfoController::class,'allusers'])->name('all.users');
Route::post('userinfo',[UserinfoController::class,'storeusers'])->name('store.users');
Route::get('userinfo/{id}',[UserinfoController::class,'editusers'])->name('edit.users');
Route::post('/userinfo/update/{id}', [UserinfoController::class, 'update'])->name("update.users");
Route::get('userinfo/delete/{id}', [UserinfoController::class, 'delete'])->name("delete.user");

//Job
Route::get('jobs',[JobsController::class,'alljobs'])->name('all.jobs');
Route::post('jobs',[JobsController::class,'storejobs'])->name('store.jobs');
Route::get('jobs/{id}',[JobsController::class,'editjobs'])->name('edit.jobs');
Route::post('/jobs/update/{id}', [JobsController::class, 'update'])->name("update.jobs");
Route::get('jobs/delete/{id}', [JobsController::class, 'delete'])->name("delete.job");
// Job Categories
Route::get('job__categories',[JobCategoryController::class,'allcat'])->name('all.jobscat');
Route::post('job__categories',[JobCategoryController::class,'storecat'])->name('store.cat');
Route::get('job__categories/{id}',[JobCategoryController::class,'editcat'])->name('edit.cat');
Route::post('job__categories/update/{id}', [JobCategoryController::class, 'update'])->name("update.cat");
Route::get('job__categories/delete/{id}', [JobCategoryController::class, 'delete'])->name("delete.cat");

//Pay Pay_grades
Route::get('paygrade',[PayGradeController::class,'allpay'])->name('all.pay');
Route::post('paygrade',[PayGradeController::class,'storepay'])->name('store.pay');
Route::get('paygrade/{id}',[PayGradeController::class,'editpay'])->name('edit.pay');
Route::post('paygrade/update/{id}', [PayGradeController::class, 'update'])->name("update.pay");
Route::get('paygrade/delete/{id}', [PayGradeController::class, 'delete'])->name("delete.pay");

//Employment_status
Route::get('emp_stat',[EmploymentStatusController::class,'allstatus'])->name('all.status');
Route::post('emp_stat',[EmploymentStatusController::class,'storestatus'])->name('store.status');
Route::get('emp_stat/{id}',[EmploymentStatusController::class,'editstatus'])->name('edit.status');
Route::get('emp_stat/delete/{id}', [EmploymentStatusController::class, 'delete'])->name("delete.status");
Route::post('emp_stat/update/{id}', [EmploymentStatusController::class, 'update'])->name("update.status");

//General Information
Route::get('gen_info',[GeneralInfoController::class,'info'])->name('gen.info');
Route::post('gen_info',[GeneralInfoController::class,'storeinfo'])->name('store.info');
Route::get('gen_info/edit/{id}',[GeneralInfoController::class,'editinfo'])->name('edit.gen.info');
Route::post('gen_info/update/{id}', [GeneralInfoController::class, 'update'])->name("update.gen.info");

//Locations
Route::get('locations',[LocationsController::class,'alllocations'])->name('all.locations');
Route::post('locations',[LocationsController::class,'storelocations'])->name('store.locations');
Route::get('locations/edit/{id}',[LocationsController::class,'editlocation'])->name('edit.locations');
Route::post('locations/update/{id}', [LocationsController::class, 'update'])->name("update.locations");
Route::get('locations/delete/{id}', [LocationsController::class, 'delete'])->name("delete.locations");

//Skills
Route::get('skills',[QualController::class,'allskills'])->name('all.skills');
Route::post('skills',[QualController::class,'storeskills'])->name('store.skills');
Route::get('skills/edit/{id}',[QualController::class,'editskills'])->name('edit.skills');
Route::post('skills/update/{id}', [QualController::class, 'update'])->name("update.skills");
Route::get('skills/delete/{id}', [QualController::class, 'delete'])->name("delete.skills");

//Education
Route::get('education',[EducationController::class,'alledu'])->name('all.education');
Route::post('education',[EducationController::class,'storeedu'])->name('store.education');
Route::get('education/edit/{id}',[EducationController::class,'editedu'])->name('edit.education');
Route::post('education/update/{id}', [EducationController::class, 'update'])->name("update.education");
Route::get('education/delete/{id}', [EducationController::class, 'delete'])->name("delete.education");

//Licenses
Route::get('licenses',[LicensesController::class,'alllic'])->name('all.licenses');
Route::post('licenses',[LicensesController::class,'storelic'])->name('store.licenses');
Route::get('licenses/edit/{id}',[LicensesController::class,'editlic'])->name('edit.licenses');
Route::get('licenses/delete/{id}',[LicensesController::class,'deletelic'])->name('delete.licenses');
Route::post('licenses/update/{id}',[LicensesController::class,'updatelic'])->name('update.licenses');

//Languages
Route::get('languages',[LanguagesController::class,'alllan'])->name('all.languages');
Route::post('languages',[LanguagesController::class,'storelan'])->name('store.languages');
Route::get('languages/edit/{id}',[LanguagesController::class,'editlan'])->name('edit.languages');
Route::get('languages/delete/{id}',[LanguagesController::class,'deletelan'])->name('delete.languages');
Route::post('languages/update/{id}',[LanguagesController::class,'updatelan'])->name('update.languages');

//Structure
Route::get('dept',[DeptController::class,'alldept'])->name('all.dept');
Route::post('dept',[DeptController::class,'storedept'])->name('store.dept');
Route::get('dept/edit/{id}',[DeptController::class,'editdept'])->name('edit.dept');
Route::get('dept/delete/{id}',[DeptController::class,'deletedept'])->name('delete.dept');
Route::post('dept/delete/{id}',[DeptController::class,'updatedept'])->name('update.dept');

//memberships
Route::get('membership',[MembershipsController::class,'allmembership'])->name('all.membership');
Route::post('membership',[MembershipsController::class,'storemembership'])->name('store.membership');
Route::get('membership/edit/{id}',[MembershipsController::class,'editmembership'])->name('edit.membership');
Route::get('membership/delete/{id}',[MembershipsController::class,'deletemembership'])->name('delete.membership');
Route::post('membership/update/{id}',[MembershipsController::class,'updatemembership'])->name('update.membership');

//Nationalities
Route::get('nationalities',[NationalitiesController::class,'allnationalities'])->name('all.nationalities');
Route::post('nationalities',[NationalitiesController::class,'storenationalities'])->name('store.nationalities');
Route::get('nationalities/edit/{id}',[NationalitiesController::class,'editnationalities'])->name('edit.nationalities');
Route::get('nationalities/delete/{id}',[NationalitiesController::class,'deletenationalities'])->name('delete.nationalities');
Route::post('nationalities/update/{id}',[NationalitiesController::class,'updatenationalities'])->name('update.nationalities');






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
