<?php
use App\order;
use Illuminate\Support\Facades\Input;
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
Route::get('/home', 'pagescontroller@home')->name('home');
Route::get('/portfolio','pagescontroller@portfolio')->name('portfolio');
Route::get('/contact','pagescontroller@contact')->name('contact');
Route::get('/login','pagescontroller@login')->name('login');
Route::get('/register','pagescontroller@regist')->name('regist');
Route::get('/afterlogin','pagescontroller@afterlogin')->name('afterlogin');
Route::get('/riwayat','pagescontroller@riwayat')->name('riwayat');
route::post('registerpost','user@registerPost');
route::post('loginpost','user@loginpost');
route::get('/logout','user@logout')->name('logout');
Route::resource('/jenisriasan','JenisriasanController');
Route::get('/ordermenu','JenisriasanController@order' )->name('order');
Route::resource('/perias','PeriasController');
Route::resource('/bookingperias','bookingperias');
Route::get('/permintaan','pagescontroller@indexper')->name('permintaan');
Route::resource('/order','OrderController');
Route::get('/admhome', function(){
    return view('page.admhome');
})->name('admhome');
Route::any('/search',function(){
    $q=Input::get('q');
    $ordermenu=Orders::where('jenis_rias','LIKE','%',$q,'%')->get();
        if(count($ordermenu)>0)
            return view('page.afterlogin')->withDetails($ordermenu)->withQuery($q);
        else return view('page.afterlogin')->withMassage('No Details found');
});