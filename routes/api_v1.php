<?php

use App\Http\Controllers\Api\v1\TicketController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->apiResource('tickets', TicketController::class);
