<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // crud user
    Route::prefix("user")->group(function(){
        Route::post("/add", [UserController::class, 'store'])->name("user.add");
        Route::get("/list", [UserController::class, 'index'])->name("user.list");
        Route::put("/edit/{user:id}", [UserController::class, 'update'])->name("user.edit");
        Route::delete("/delete/{user}", [UserController::class, 'destroy'])->name("user.delete");
    });
    
    Route::prefix("item")->group(function(){
        Route::get("/list", [ItemController::class, 'index'])->name("item.list");
        Route::post("/add", [ItemController::class, 'store'])->name("item.add");
        Route::put("/edit/{item}", [ItemController::class, 'update'])->name("item.edit");
        Route::delete("/delete/{item:id}", [ItemController::class, 'destroy'])->name("item.delete");
    });
    
    Route::prefix("topup")->group(function(){
        Route::get("/", [TopupController::class, 'index'])->name("topup.index");
        Route::get("/check", [TopupController::class, 'check'])->name("topup.check");
        Route::post("/create", [TopupController::class, 'store'])->name("topup.create");
    });
    
    Route::prefix("bank")->group(function(){
        Route::get("/", [BankController::class, 'get_transaction'])->name("bank.index");
    });
    
    Route::prefix("transaction")->group(function(){
        Route::get("/", [TransactionController::class, 'index'])->name("transaction.index");
        Route::post("/create", [TransactionController::class, 'store'])->name("transaction.create");
    });
});
