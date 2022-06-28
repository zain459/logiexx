<?php


use App\Http\Controllers\Admin\Partner\PartnerIndexController;
use App\Http\Controllers\Admin\Partner\PartnerStoreController;
use App\Http\Controllers\Admin\Partner\PartnerUpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('setting')->middleware(['auth'])->group(function () {


    //partners

//    Route::get('partners', PartnerIndexController::class)->name('inventory.partner-index');
//    Route::post('partner/store', PartnerStoreController::class)->name('inventory.partner-store');
//    Route::post('partner/update', PartnerUpdateController::class)->name('inventory.partner-update');
});
