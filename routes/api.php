<?php


use App\Http\Resources\EventResource;
use App\Models\Event;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/events/{id}', function ($id) {
    return new EventResource(Event::findOrFail($id));
});

Route::get('/events', function () {
    return Event::all();
});

Route::post('/events', function (Request $request) {
    $all = $request->all();
    $event = new Event();
    $event->name = $all['name'];
    $event->description = $all['description'];
    $event->save();
    return $event;
});
