<?php

use App\Http\Controllers\Backend\AccountController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MetaDataController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\PostController as FrontPostController;
use App\Http\Controllers\Frontend\CategoryController as FrontCategoryController;
use App\Http\Controllers\Frontend\PageController as FrontPageController;
use App\Http\Controllers\Frontend\TagController as FrontTagController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// FrontEnd Routes [Public routes]
Route::get('/', [HomeController::class, 'index'])->name('webhome');
Route::get('/post/{slug}', [FrontPostController::class, 'getPostBySlug'])->name('post.show');
Route::get('/category/{slug}', [FrontCategoryController::class, 'getCategoryBySlug'])->name('category.show');
Route::get('/page/{slug}', [FrontPageController::class, 'getPageBySlug'])->name('page.show');
Route::get('/tag/{slug}', [FrontTagController::class, 'getPostsPerTags'])->name('tag.show');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function () {
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::middleware(['auth', 'can:admin-login'])->name('backend.')->prefix('/admin')->group(function () {
        // This Roles can manage with Admin & Writers with specific policies.
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/post/search', [PostController::class,'search'])->name('post.search');
        Route::get('/post/slug-get', [PostController::class, 'getSlug'])->name('post.getslug');
        Route::resource('/post', PostController::class);
        Route::resource('/tag', TagController::class);
        Route::resource('/account', AccountController::class, ['only' => ['index', 'update']]);

        // Special To Admin Role Only
        Route::middleware(['can:admin-only'])->group(function () {
            Route::get('/category/slug-get', [CategoryController::class, 'getSlug'])->name('category.getslug');
            Route::resource('/category', CategoryController::class);
            Route::get('/page/slug-get', [PageController::class, 'getSlug'])->name('page.getslug');
            Route::resource('/user', UserController::class, ['except' => ['create', 'store', 'show']]);
            Route::resource('/page', PageController::class);
            Route::resource('/role', RoleController::class, ['only' => ['index']]);
            Route::resource('/setting', SettingController::class, ['only' => ['index', 'update']]);
            Route::group([],function () {
                Route::get('/metaData',[MetaDataController::class,'index'])->name('metaData.index');
                Route::get('/add_metaData',[MetaDataController::class,'create'])->name('metaData.create');
                Route::post('/store_metaData',[MetaDataController::class,'store'])->name('metaData.store');
                Route::get('/edit_metaData/{id}',[MetaDataController::class,'edit'])->name('metaData.edit');
                Route::put('/update_metaData/{id}',[MetaDataController::class,'update'])->name('metaData.update');
            });
        });
    });

});




require __DIR__ . '/auth.php';