<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SayfalarController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SSSController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('analayout.index');
})->name('/');

Route::get('sayfa',function (){
    return view('analayout.sayfa');
})->name('sayfa');

Route::get('ahi-evrani-veli-kimdir',function (){
    return view('analayout.ahi-evrani-veli-kimdir');
})->name('ahievranivelikimdir');

Route::get('tarihce',function (){
    return view('analayout.tarihce');
})->name('tarihce');

Route::get('logomuz',function (){
    return view('analayout.logomuz');
})->name('logomuz');

//rektorun-mesajı
Route::get('rektorun-mesaji',function (){
    return view('analayout.rektorun-mesaji');
})->name('rektorun-mesaji');

//barinma
Route::get('barinma',function (){
    return view('analayout.barinma');
})->name('barinma');

//kutuphane
Route::get('kutuphane',function (){
    return view('analayout.kutuphane');
})->name('kutuphane');
//beslenme
Route::get('beslenme',function (){
    return view('analayout.beslenme');
})->name('beslenme');
//ulasim
Route::get('ulasim',function (){
    return view('analayout.ulasim');
})->name('ulasim');

//ogrenci-butigi
Route::get('ogrenci-butigi',function (){
    return view('analayout.ogrenci-butigi');
})->name('ogrenci-butigi');

//ogrenci-toplulukari
Route::get('ogrenci-topluluklari',function (){
    return view('analayout.ogrenci-topluluklari');
})->name('ogrenci-topluluklari');

//kilavuz-ve-kosullar
Route::get('kilavuz-ve-kosullar',function (){
    return view('analayout.kilavuz-ve-kosullar');
})->name('kilavuz-ve-kosullar');

//kirsehir-genel-bilgiler
Route::get('kirsehir-genel-bilgiler',function (){
    return view('analayout.kirsehir-genel-bilgiler');
})->name('kirsehir-genel-bilgiler');

//kirsehirin-kulturu
Route::get('kirsehirin-kulturu',function (){
    return view('analayout.kirsehirin-kulturu');
})->name('kirsehirin-kulturu');

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin');


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    //GET İşlemleri
    Route::get('/genelbilgiler', [SettingController::class, 'edit'])->name('genelbilgiler.edit');
    Route::get('/slider/create', function (){
        return view('slider.create');
    })->name('slider.create');
    Route::get('/sayfa/create', function (){
        return view('sayfalar.create');
    })->name('sayfa.create');
    Route::get('/sorular/create', function (){
        return view('sss.create');
    })->name('sorular/create');
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/sayfalar',[SayfalarController::class ,'index'])->name('sayfalar.index');
    Route::get('/sorular',[SSSController::class ,'index'])->name('sorular.index');
    //POST İşlemleri
    Route::post('/genelbilgiler', [SettingController::class, 'store'])->name('settings.store');
    Route::post('/slider', [SliderController::class, 'store'])->name('slider-ekle');
    Route::post('/sayfalar', [SayfalarController::class, 'store'])->name('sayfa-ekle');
    Route::post('/soru-ekle', [SSSController::class, 'store'])->name('soru-ekle');
    //PUT-GET İşlemleri
    Route::get('slider-duzenle/{id}', [SliderController::class, 'edit'])->name('slider-duzenle');
    Route::get('sayfa-duzenle/{id}', [SayfalarController::class, 'edit'])->name('sayfa-duzenle');
    Route::get('soru-duzenle/{id}', [SSSController::class, 'edit'])->name('soru-duzenle');


    //PUT İşlemleri
    Route::put('slider-update/{id}', [SliderController::class, 'update'])->name('slider-update');
    Route::put('sayfa-update/{id}', [SayfalarController::class, 'update'])->name('sayfa-update');
    Route::put('soru-update/{id}', [SSSController::class, 'update'])->name('soru-update');
    //DELETE İşlemleri
    Route::put('slider-sil/{id}', [SliderController::class, 'destroy'])->name('slider-sil');
    Route::put('sayfa-sil/{id}', [SayfalarController::class, 'destroy'])->name('sayfa-sil');
    Route::put('soru-sil/{id}', [SSSController::class, 'destroy'])->name('soru-sil');
});
require __DIR__.'/auth.php';

Route::get('/{slug}', [SayfalarController::class, 'show']);
