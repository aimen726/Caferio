<?php

use App\Http\Controllers\backend\AdminFaqsController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminProjectsController;
use App\Http\Controllers\backend\TeamMemberController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FAQController;
use App\Http\Controllers\frontend\FoodMenuController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ReservationController;
use App\Http\Controllers\frontend\ReviewsController;
use App\Http\Controllers\frontend\ShopController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/faqs', [FAQController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/foodmenu', [FoodMenuController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'sendMessage']);
Route::get('/reviews', [ReviewsController::class, 'index']);
Route::get('/reservation', [ReservationController::class, 'index']);
Route::post('/reservation', [ReservationController::class, 'reservation']);

// Admin Routes
Route::prefix('admin')->group(function () {
    // Login
    Route::get('/login', [AdminLoginController::class, 'index']);
    Route::post('/login', [AdminLoginController::class, 'onLogin']);
    Route::get('/logout', [AdminLoginController::class, 'logoutAdmin']);

    // Admin Dashboard

    Route::get('/', [AdminHomeController::class, 'index']);

    // Admin Management
    Route::get('/register', [AdminHomeController::class, 'registerAdmin'])->name('admin.create');
    Route::post('/register', [AdminHomeController::class, 'submitAdminRecord']);
    Route::get('/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('admin.show');
    Route::get('/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('admin.delete');
    Route::get('/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('admin.edit');
    Route::post('/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('admin.update'); // Use post or put

    // Team Management
    Route::get('/team', [TeamMemberController::class, 'index'])->name('team.show');
    Route::get('/team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('team.details');
    Route::get('/team-add', [TeamMemberController::class, 'registerTeam'])->name('team.add');
    Route::post('/team-add', [TeamMemberController::class, 'submitTeamRecord']);
    Route::get('/team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('team.edit');
    Route::put('/team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('team.update');
    Route::delete('/team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('team.delete');

    // FAQs Management
    Route::get('/faqs', [AdminFaqsController::class, 'index'])->name('faq.show');
    Route::get('/faq-add', [AdminFaqsController::class, 'addFAQ'])->name('faq.add');
    Route::post('/faq-add', [AdminFaqsController::class, 'submitFaqRecord']);
    Route::get('/faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('faq.edit');
    Route::put('/faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('faq.update');
    Route::delete('/faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('faq.delete');

    // Project Management
    Route::get('/projects', [AdminProjectsController::class, 'index'])->name('project.add');
    Route::get('/project-add', [AdminProjectsController::class, 'addProject'])->name('project.add');
    Route::post('/project-add', [AdminProjectsController::class, 'submitProjectRecord']);
    Route::get('/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('project.edit');
    Route::put('/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('project.update');
    Route::delete('/project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('project.delete');

    // Logout
    Route::get('/logout', [AdminLoginController::class, 'logoutAdmin']);
});

// Logout for unauthorized users
Route::get('admin/logout', function () {
    if (session()->has('email')) {
        session()->pull('id', null);
        session()->pull('first_name', null);
        session()->pull('last_name', null);
        session()->pull('email', null);
    }

    return redirect('/admin/login');
})->name('admin.logout');
