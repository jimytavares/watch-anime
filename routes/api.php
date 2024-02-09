<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'V1'], function(){
    Route::apiResource('skills', SkillController::class);
});