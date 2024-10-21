<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/produits", [ProductController::class, "index"])->name("product.index");
Route::get("/products/{product}", [ProductController::class, "show"])->name("product.show");
Route::delete("/products/{product}", [ProductController::class, "destroy"])->name("product.destroy");

Route::get("/produits/ajouter", [ProductController::class, "create"])->name("product.create");
Route::post("/produits/ajouter", [ProductController::class, "store"])->name("product.store");

Route::get("/produits/{product}/edit", [ProductController::class, "edit"])->name("product.edit");
Route::put("/produits/{product}/edit", [ProductController::class, "update"])->name("product.update");


Route::get("/categories", [CategoryController::class, "index"]);

// *** AUTH

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::post("/login", [AuthController::class, "handleLogin"])->name("handleLogin");

Route::get("/register", [AuthController::class, "register"])->name("register");
Route::post("/register", [AuthController::class, "handleRegister"])->name("handleRegister");


