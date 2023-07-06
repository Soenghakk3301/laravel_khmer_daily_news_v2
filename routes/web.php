<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NewsPostController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SeoSettingController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
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

// ==> FRONTEND MAIN PAGE ROUTE <== //
Route::get('/', function () {
    return view('frontend.home');
})->name('home');


// ==> MIDDLEWARES <== //
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
        Route::get('/admin/profile', 'adminProfile')->name('admin.profile');
        Route::post('/admin/profile/store', 'adminProfileStore')->name('admin.profile.store');
        Route::get('/admin/change/password', 'adminChangePassword')->name('admin.change.password');
        Route::post('/admin/update/password', 'adminUpdatePassword')->name('admin.update.password');
        Route::get('/admin/logout', 'adminLogout')->name('admin.logout');
    });


    Route::controller(AdminController::class)->group(function () {

        Route::get('/all/admin', 'allAdmin')->name('all.admin');
        Route::get('/add/admin', 'addAdmin')->name('add.admin');
        Route::post('/store/admin', 'storeAdmin')->name('admin.store');
        Route::get('/edit/admin/{id}', 'editAdmin')->name('edit.admin');
        Route::post('/update/admin', 'updateAdmin')->name('admin.update');
        Route::get('/delete/admin/{id}', 'deleteAdmin')->name('delete.admin');

        Route::get('/inactive/admin/user/{id}', 'inactiveAdminUser')->name('inactive.admin.user');
        Route::get('/active/admin/user/{id}', 'activeAdminUser')->name('active.admin.user');

    });


    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/all', 'allCategory')->name('all.category');
        Route::get('/category/add', 'addCategory')->name('add.category');
        Route::post('/category/store', 'storeCategory')->name('store.category');
        Route::get('/category/edit/{id}', 'editCategory')->name('edit.category');
        Route::post('/category/update/{id}', 'updateCategory')->name('update.category');
        Route::get('/category/delete/{id}', 'deleteCategory')->name('delete.category');
    });


    Route::controller(SeoSettingController::class)->group(function () {

        Route::get('/seo/setting', 'seoSetting')->name('seo.setting');
        Route::post('/update/seo/setting/{id}', 'updateSeoSetting')->name('update.seo.setting');

    });

    Route::controller(SocialController::class)->group(function () {
        Route::get('/social/setting', 'socialSetting')->name('social.setting');
        Route::post('/update/social/setting/{id}', 'updateSocialSetting')->name('update.social.setting');
    });

    // Permission
    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/permission', 'allPermission')->name('all.permission');
        Route::get('/add/permission', 'addPermission')->name('add.permission');
        Route::post('/store/permission', 'storePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'editPermission')->name('edit.permission');
        Route::post('/update/permission', 'updatePermission')->name('permission.update');
        Route::get('/delete/permission/{id}', 'deletePermission')->name('delete.permission');
    });

    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/roles', 'allRoles')->name('all.roles');
        Route::get('/add/roles', 'addRoles')->name('add.roles');
        Route::post('/store/roles', 'storeRoles')->name('roles.store');
        Route::get('/edit/roles/{id}', 'editRoles')->name('edit.roles');
        Route::post('/update/roles', 'updateRoles')->name('roles.update');
        Route::get('/delete/roles/{id}', 'deleteRoles')->name('delete.roles');

        Route::get('/add/roles/permission', 'addRolesPermission')->name('add.roles.permission');
        Route::post('/role/permission/store', 'rolePermissionStore')->name('role.permission.store');
        Route::get('/all/roles/permission', 'allRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}', 'adminEditRoles')->name('admin.edit.roles');
        Route::post('/role/permission/update/{id}', 'rolePermissionUpdate')->name('role.permission.update');
        Route::get('/admin/delete/roles/{id}', 'adminDeleteRoles')->name('admin.delete.roles');
    });

    Route::controller(NewsPostController::class)->group(function () {

        Route::get('/all/news/post', 'allNewsPost')->name('all.news.post');
        Route::get('/add/news/post', 'addNewsPost')->name('add.news.post');
        Route::post('/store/news/post', 'storeNewsPost')->name('store.news.post');
        Route::get('/edit/news/post/{id}', 'editNewsPost')->name('edit.news.post');
        Route::post('/update/news/post', 'updateNewsPost')->name('update.news.post');
        Route::get('/delete/news/post/{id}', 'deleteNewsPost')->name('delete.news.post');

        Route::get('/inactive/news/post/{id}', 'inactiveNewsPost')->name('inactive.news.post');
        Route::get('/active/news/post/{id}', 'activeNewsPost')->name('active.news.post');
    });
});

Route::get('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/news/details/{id}/{slug}', [IndexController::class, 'newsDetails']) ;

// ==> FRONTEND ROUTES <== //
Route::get('/saved', [FrontendController::class, 'saved'])->name('saved');
Route::get('/currentnews', [FrontendController::class, 'currentnews'])->name('currentnews');
Route::get('/tech', [FrontendController::class, 'tech'])->name('tech');
Route::get('/sport', [FrontendController::class, 'sport'])->name('sport');
Route::get('/entertiatment', [FrontendController::class, 'entertiatment'])->name('entertiatment');
Route::get('/life_social', [FrontendController::class, 'life_social'])->name('life_social');
Route::get('/post', [FrontendController::class, 'post'])->name('post');


Route::get('/tiny', function () {
    return view('frontend.tiny');
});


// ==> FRONTEND ADMIN ROUTES <== //

require __DIR__.'/auth.php';