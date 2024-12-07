<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\signupcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\applicationcontroller;
use App\Models\Pet;

Route::get('/',[Homecontroller::class, 'Homepage']);

Route::get('/caretips',[Homecontroller::class, 'petcare']);
Route::post('/postcaretips',[signupcontroller::class, 'storeq']);

Route::get ('/contact',[Homecontroller::class,'contact']);


Route::get('/login', [Homecontroller::class, 'login']);
Route::post('/postlogin', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// User home route (only accessible if logged in)
Route::get('/userhome', function () {
    if (session()->has('user')) {
        return view('userhome');
    } else {
        return redirect('/login');
    }
});

Route::get('/signup',[Homecontroller::class, 'signup']);
Route::post('/postsignup',[signupcontroller::class, 'store']);

// Route to display the profile page (only if the user is logged in)
Route::get('/userprofile', [ProfileController::class, 'showProfile'])->name('user.profile');

// Route to update the profile
Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update.profile');





Route::get('/admin',[Homecontroller::class, 'admin']);





Route::prefix('admin/pets')->name('admin.pets.')->group(function() {
    // Display all pets (Admin)
    Route::get('/', [PetController::class, 'index'])->name('index');

    // Show the form to create a new pet (Admin)
    Route::get('create', [PetController::class, 'create'])->name('create');

    // Store a newly created pet (Admin)
    Route::post('store', [PetController::class, 'store'])->name('store');

    // Route for editing a pet (Admin)
    Route::get('{id}/edit', [PetController::class, 'edit'])->name('edit');

    // Route for updating a pet (Admin)
    Route::put('{id}', [PetController::class, 'update'])->name('update');

    // Delete a pet (Admin)
    Route::delete('destroy/{id}', [PetController::class, 'destroy'])->name('destroy');
});

// Frontend Route (Non-admin)
Route::get('/pets', function () {
    $pets = Pet::all();
    return view('pets.index', compact('pets'));
});

Route::get('/pets/{id}', function ($id) {
    $pet = Pet::find($id);

    if (!$pet) {
        abort(404, 'Pet not found');
    }

    return view('pets.show', compact('pet'));
    
});


Route::get('/profile', [ProfileController::class, 'showUserDetails'])->name('user.details');

// Admin Login Routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);

//Route:: req applications
Route::view('req_app','req-application');
Route::post('req_app',[applicationcontroller::class,'req_app']); 