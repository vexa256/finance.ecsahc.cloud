<?php

use App\Http\Controllers\ActivityAnalytics;

Route::middleware(['auth'])->group(function () {

    Route::controller(ActivityAnalytics::class)->group(function () {

        Route::post('GrantActivityAccepted', 'GrantActivityAccepted')->name('GrantActivityAccepted');

        Route::get('ActivityGrantImpactReport/{id}', 'ActivityGrantImpactReport')->name('ActivityGrantImpactReport');

        Route::get('SelectActivities', 'SelectActivities')->name('SelectActivities');

    });
});
