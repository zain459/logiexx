<?php


use Illuminate\Support\Facades\Route;
use Logixs\Modules\Partner\Controllers\PartnerIndexController;
use Logixs\Modules\Partner\Controllers\PartnerStoreController;
use Logixs\Modules\Partner\Controllers\PartnerUpdateController;

Route::prefix('setting')->middleware(['auth'])->group(function () {


    //partners

    Route::get('partners', PartnerIndexController::class)->name('inventory.partner-index');
    Route::post('partner/store', PartnerStoreController::class)->name('inventory.partner-store');
    Route::post('partner/update', PartnerUpdateController::class)->name('inventory.partner-update');
});
