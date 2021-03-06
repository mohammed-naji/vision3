<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RelationController;
use Illuminate\Database\Eloquent\Factories\Relationship;

Route::get('/', [HomeController::class, 'index']); // laravel 8
// Route::get('/', 'HomeController@index'); // laravel < 8

// Route::get('/about', [HomeController::class, 'about']);

// Route::get('/user/{user?}', [HomeController::class, 'user']);

// Route::get('about', function() {
//     return 'About Page';
// })->name('aboutpage');

// Route::get('team', function() {
//     return 'Team Page';
// })->name('teampage');

// Route::get('services', function() {
//     return 'Services Page';
// })->name('servicespage');

// Route::get('contact-me', function() {
//     return 'contact Page';
// })->name('contactpage');

// Route::get('user', function() {
//     return 'User Page';
// });

// Route::get('user/profile/main', function() {
//     return 'profile Page';
// });

// Route::get('student/{name?}/{age?}', function($name = '', $age = '') {
//     return 'Welcome ' . $name . ' ' . $age;
// });

// Routes Type
// Route::get('route_url', 'Action');
// Route::post('route_url', 'Action');
// Route::put('route_url', 'Action');
// Route::patch('route_url', 'Action');
// Route::delete('route_url', 'Action');


// Route::get('about-us', function() {
//     return view('about');
// });



// Route::get('admin/home', function() {});
// Route::get('admin/posts', function() {});
// Route::get('admin/posts/create', function() {});
// Route::get('admin/news', function() {});
// Route::get('admin/reports', function() {});
// Route::get('admin/insights', function() {});
// Route::get('admin/music', function() {});
// Route::get('admin/movies', function() {});
// Route::get('admin/categories', function() {});
// Route::get('admin/roles', function() {});
// Route::get('admin/crm', function() {});
// Route::get('admin/users', function() {});

// Route::prefix('admin')->name('admin.')->group(function() {
//     Route::get('home', function() {})->name('home');
//     Route::get('posts', function() {})->name('home');
//     Route::get('posts/create', function() {})->name('home');
//     Route::get('news', function() {})->name('home');
//     Route::get('reports', function() {})->name('home');
//     Route::get('insights', function() {})->name('home');
//     Route::get('music', function() {})->name('home');
//     Route::get('movies', function() {})->name('home');
//     Route::get('categories', function() {})->name('home');
//     Route::get('roles', function() {})->name('home');
//     Route::get('crm', function() {})->name('home');
//     Route::get('users', function() {})->name('home');
// });

// Route::prefix('site1')->name('site1.')->group(function() {
//     Route::get('/', [Site1Controller::class, 'index'])->name('index');
//     Route::get('/portfolio', [Site1Controller::class, 'portfolio'])->name('portfolio');
//     Route::get('/about', [Site1Controller::class, 'about'])->name('about');
//     Route::get('/contact', [Site1Controller::class, 'contact'])->name('contact');
//     Route::post('/contact_post', [Site1Controller::class, 'contact_post'])->name('contact_post');
// });


// Route::get('form1', [FormController::class, 'form1']);
// Route::post('form1', [FormController::class, 'form1_submit'])->name('abed');
// Route::get('form1-data', [FormController::class, 'form1_data'])->name('form1_data');


// Route::get('form2', [FormController::class, 'form2'])->name('form2');
// Route::post('form2', [FormController::class, 'form2_submit']);

// Route::get('form3', [FormController::class, 'form3'])->name('form3');
// Route::post('form3', [FormController::class, 'form3_submit']);

// Route::get('form4', [FormController::class, 'form4'])->name('form4');
// Route::post('form4', [FormController::class, 'form4_submit']);

// Route::get('form5', [FormController::class, 'form5'])->name('form5');
// Route::post('form5', [FormController::class, 'form5_submit']);


// Route::get('products', function(){}); // get all data
// Route::get('products/create', function() {}); // show form to create new record
// Route::post('products', function() {}); // add new record to database
// Route::get('products/{id}/edit', function() {}); // show form to edit specific record from database
// Route::put('products/{id}', function() {}); // update record from database
// Route::delete('products/{id}', function() {}); // delete record from database
// Route::get('products/{id}', function() {}); // show details record from database

Route::resource('products', ProductController::class);
Route::delete('delete-all-products', [ProductController::class, 'delete_all'])->name('products.delete_all');
Route::delete('delete-selected-products', [ProductController::class, 'delete_selected'])->name('products.delete_selected');




Route::get('posts', [RelationController::class, 'posts']);



Route::get('one-to-one', [RelationController::class, 'one_to_one']);
Route::get('one-to-many', [RelationController::class, 'one_to_many']);
Route::get('many-to-many', [RelationController::class, 'many_to_many']);
// Route::get('many-to-many')

// CapitalizeCase
// camelCase
// snake_case
// UPPERCASE
// kebab-case
