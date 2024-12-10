<?php
use App\Http\Controllers\nlckhoacontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
#khoa
Route::get('/khoas',[nlckhoacontroller::class,'nlcgetallkhoa'])->name('nlckhoa.nlcgetallkhoa');
Route::get('/khoas/detail/{makh}',[nlckhoacontroller::class,'nlcgetkhoa'])->name('nlckhoa.nlcgetkhoa');
Route::get('/khoas/edit/{makh}',[nlckhoacontroller::class,'nlcedit'])->name('nlckhoa.nlcgetkhoa');
Route::get('/khoas/edit',[nlckhoacontroller::class,'nlceditsubmit'])->name('nlckhoa.nlceditsubmit');