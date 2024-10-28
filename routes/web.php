<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;







Route::get('/',[TemplateController::class,'index'])->name('frontend.home');

Route::get('/about',[TemplateController::class,'about']);

Route::get('/service',[TemplateController::class,'service']);

//contact route


Route::get('/contact',[ContactController::class,'contact'])->name('frontend.contact');

Route::post('/store',[ContactController::class,'store'])->name('contact.store');

Route::get('/new',[ContactController::class,'new'])->middleware('auth')->name('frontend.new');

Route::get('/new/{contact}/edit',[ContactController::class,'edit'])->name('frontend.edit')->middleware('auth');

Route::put('/new/{contact}/update',[ContactController::class,'update'])->name('frontend.update')->middleware('auth');

Route::delete('/new/{contact}/delete',[ContactController::class,'delete'])->name('frontend.delete')->middleware('auth');



//admin route



Route::get('/login',[AdminController::class,'login'])->name('frontend.login');

Route::get('/login',[AdminController::class,'login'])->name('login');


Route::post('/keep',[AdminController::class,'keep'])->name('contact.keep');

Route::get('/signup',[AdminController::class,'signup'])->name('frontend.signup');

Route::post('/postSignup',[AdminController::class,'postSignup'])->name('admin.signup');

Route::post('/postLogin',[AdminController::class,'postLogin'])->name('admin.login');

