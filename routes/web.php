<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('create');
});
Route::post('/create', function (CreateEmployeeRequest $request) {
    Employee::create([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'department' => $request->get('department'),
    ]);

    return redirect(route('home'));
})->name('employee.create');

Route::post('/lookup', function (Request $request) {
    $email = $request->get('lookupEmail');
    return view('home', [
        'employees' => Employee::where('email', 'like', $email . "%")->get()
    ]);
})->name('employee.lookup');



