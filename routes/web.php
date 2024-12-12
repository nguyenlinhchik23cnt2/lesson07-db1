<?php
use App\Http\Controllers\nlckhoacontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nlcmonhoccontroller;

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
//detail
Route::get('/khoas/detail/{makh}',[nlckhoacontroller::class,'nlcgetkhoa'])->name('nlckhoa.nlcgetkhoa');
//edit
Route::get('/khoas/edit/{makh}',[nlckhoacontroller::class,'nlcedit'])->name('nlckhoa.nlcgetkhoa');
Route::post('/khoas/edit',[nlckhoacontroller::class,'nlceditsubmit'])->name('nlckhoa.nlceditsubmit');
//khoa insert 
Route::post('/khoas/insertsubmit',[nlckhoacontroller::class,'nlcinsertsubmit'])->name('nlckhoa.nlcinsertsubmit');
Route::get('/khoas/insert',[nlckhoacontroller::class,'nlcinsert'])->name('nlckhoa.nlcinsert');
#khoa -delete
Route::get('/khoas/delete/{makh}',[nlckhoacontroller::class,'nlcdelete'])->name('nlckhoa.nlcdeletekhoa');

///mon hoc 
#mon hoc
route::get('/monhoc',[nlcmonhoccontroller::class,'getallmonhoc'])->name('nlcmonhoc.nlcgetallmonhoc');

#detail
Route::get('/monhoc/detail/{mamh}',[nlcmonhoccontroller::class,'getmonhoc'])->name('nlcmonhoc.nlcgetmonhoc');
#insert
Route::get('/monhoc/insert',[nlcmonhoccontroller::class,'getinsert'])->name('nlcmonhoc.nlcgetinsert');
Route::POST('/monhocc/insert',[nlcmonhoccontroller::class,'getinsertsubmit'])->name('nlcmonhoc.nlcgetinsertsubmit');

