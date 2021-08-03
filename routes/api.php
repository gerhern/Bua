<?php

use App\Http\Controllers\api\v1\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('v1/employees',EmployeeController::class)->only(['store', 'index', 'show'])->names([
    'index' => 'apiIndex',
    'show'  => 'apiShow'
]);
