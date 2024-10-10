<?php

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

// *** Créer un Controller qui s'appelle HomeController'
// *** Ajouter une action (methode) index
// *** Retourner le view Welcome

