<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginSignupController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// Default Visitor Page
Route::get('/', function () {
    $user = Auth::user();
    if ($user && $user->role == 0) {
        return view('Templates.Admin.admin-dashboard', compact('user'));
    }
    else {
        return view('Templates.Users.index', compact('user'));
    }
})->name('user.index');

// Signup page route
Route::get('Signup', function () {
    return view('Templates.signup');
})->name('signup');

// Login page route
Route::get('Login', function () {
    return view('Templates.login');
})->name('login');

// Signup / login function route
Route::controller(LoginSignupController::class)->group(function () {
    Route::post('signup', 'signup')->name('users.signup');
    Route::post('login', 'login')->name('users.login');
    Route::get('logout', 'logout')->name('users.logout');
    Route::get('admin/logout', 'admin_logout')->name('admin.logout');
});

// Users routes
Route::middleware('user.auth')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::prefix('Users/')->group(function () {
            // Hotel
            Route::get('MoreHotels', 'explore_more_hotels')->name('user.explore_more_hotels');
            Route::get('HotelDetail', 'hotel_detail')->name('user.hotel_detail');
            // Profile
            Route::get('Profile', 'user_profile')->name('user.profile');
            Route::post('Profile/Update', 'user_profile_update')->name('user.profile_update');
        });
    });
});

// Admin routes
Route::middleware('user.auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::prefix('Admin/')->group(function () {
            // Dashboard
            Route::get('Dashboard', function () {
                $user = Auth::user();
                return view('Templates.Admin.admin-dashboard', compact('user'));
            })->name('admin.dashbord');

            // Hotel
            Route::get('AddHotel', 'add_hotel_page')->name('user.add_hotel_page');
            Route::post('AddHotelData', 'add_hotel')->name('user.add_hotel');
        });
    });
});
