<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ajax\{
    DashboardController as AjaxDashboardController,
    CommentController as AjaxCommentController
};
use App\Http\Controllers\Servers\{
    AuthController,
    DashboardController,
    LanguageController,
    PermissionController,
    UserController,
    UserCatalogueController,
    PostCatalogueController,
    PostController,
    CommentController,
    SystemController,
    GoogleController,
    FacebookController,
    VerificationController
};

use App\Http\Controllers\Clients\{
    HomeController,
    PostController as ClientPostController,
};

// CLIENT ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('post-catalogue/{id?}', [ClientPostController::class, 'catalogues'])
    ->name('post-catalogue');

Route::get('post-detail/{id}', [ClientPostController::class, 'detail'])->name('post-detail');


// SERVER ROUTES
Route::middleware(['admin', 'locale'])->group(function () {
    // Routes for Dashboard
    Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    // Routes for UserCatalogue
    Route::prefix('users/catalogues')->name('users.catalogues.')->group(function () {
        Route::get('permission', [UserCatalogueController::class, 'permission'])->name('permission');
        Route::put('updatePermission', [UserCatalogueController::class, 'updatePermission'])->name('updatePermission');
    });

    Route::prefix('/')->name('users.')->group(function () {
        Route::resource('users/catalogues', UserCatalogueController::class);
    });

    // Routes for User
    Route::resource('users', UserController::class);

    // Routes for Languages
    Route::resource('languages', LanguageController::class);

    Route::prefix('languages')->name('languages.')->group(function () {
        Route::get('{canonical}/switch', [LanguageController::class, 'switchServerLanguage'])->name('switch');
        Route::get('{id}/{languageId}/{model}/translate', [LanguageController::class, 'translate'])->where(['id' => '[0-9]+', 'languageId' => '[0-9]+'])->name('translate');
        Route::put('{id}/handleTranslate', [LanguageController::class, 'handleTranslate'])->where(['id' => '[0-9]+'])->name('handleTranslate');
    });

    // Routes for System
    Route::prefix('system')->name('system.')->group(function () {
        Route::get('index', [SystemController::class, 'index'])->name('index');
        Route::post('store', [SystemController::class, 'store'])->name('store');
    });


    // Routes for Permission
    Route::resource('permissions', PermissionController::class);

    // Routes for PostCatalogue
    Route::prefix('/')->name('posts.')->group(function () {
        Route::resource('posts/catalogues', PostCatalogueController::class);
    });

    // Routes for Post
    Route::resource('posts', PostController::class);


    // Routes for CommentController
    Route::prefix('comment')->name('comment.')->group(function () {
        Route::get('{commentable_id}/{commentable_type}/index', [CommentController::class, 'index'])->name('index');
    });


    // Route for Ajax
    Route::post('ajax/dashboard/changeStatus', [AjaxDashboardController::class, 'changeStatus'])->name('ajax.dashboard.changeStatus');
    Route::post('ajax/dashboard/changeStatusAll', [AjaxDashboardController::class, 'changeStatusAll'])->name('ajax.dashboard.changeStatusAll');
    Route::get('ajax/dashboard/getMenu', [AjaxDashboardController::class, 'getMenu'])->name('ajax.dashboard.getMenu');
    Route::get('ajax/dashboard/findModelObject', [AjaxDashboardController::class, 'findModelObject'])->name('ajax.dashboard.findModelObject');
    Route::get('ajax/dashboard/findPromotionObject', [AjaxDashboardController::class, 'findPromotionObject'])->name('ajax.dashboard.findPromotionObject');
    Route::get('ajax/dashboard/getPromotionConditionValue', [AjaxDashboardController::class, 'getPromotionConditionValue'])->name('ajax.dashboard.getPromotionConditionValue');
});


Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::get('signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::post('signup', [AuthController::class, 'store'])->name('auth.store');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot');
Route::post('reset-password', [AuthController::class, 'handleForgotPassword'])->name('auth.reset');
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

// Route for verifying email
Route::get('signup/verify/{id}', [VerificationController::class, 'signupVerify'])->name('signup.verify');

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
