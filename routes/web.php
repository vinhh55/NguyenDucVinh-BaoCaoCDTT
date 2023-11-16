<?php

use Illuminate\Support\Facades\Route;
//frontend
use App\Http\Controllers\frontend\SiteController;
//backend
use App\Http\Controllers\backend\DashboardController;

use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\orderdetailController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AuthController;

//trang chu
Route::get('/',[SiteController::class,'index'])->name('site.index');
Route::get('/admin/login', [AuthController::class, 'getlogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'postlogin'])->name('admin.postlogin');
Route::prefix('admin')->middleware('loginAdmin')->group(function(){
Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');



});
   //trang nguoi dung
   
   Route::get('/',[SiteController::class,'index'])->name('site.index');
   Route::get('san-pham',[SiteController::class,'product'])->name('site.product');
   Route::get('bai-viet',[SiteController::class,'post'])->name('site.post');
   Route::get('lien-he',[SiteController::class,'index'])->name('site.contact');
   Route::get('tim-kiem/{leyword}',[SearchController::class,'index'])->name('site.search');
   Route::get('gio-hang',[CartController::class,'index'])->name('site.cart');
   Route::get('gio-hang/addcart/{id}',[CartController::class,'index'])->name('site.cart');
    Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
    //category
    Route::get('category/trash',[CategoryController::class,'trash'])->name('category.trash');
    Route::resource('category', CategoryController::class);
    Route::prefix('category')->group(function(){
    Route::get('category/status/{category}',[CategoryController::class,'status'])->name('category.status');
    Route::get('category/delete/{category}',[CategoryController::class,'delete'])->name('category.delete');
     Route::get('restore/{category}',[CategoryController::class,'restore'])->name('category.restore');
    });
    //endcategory
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('order', orderdetailController::class);
    Route::resource('orderdetail', OrderController::class);
    Route::resource('post', PostController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('topic', TopicController::class);
    Route::resource('user', UserController::class);
    //brand
    Route::get('brand_trash',[BrandController::class,'trash'])->name('brand.trash');
    Route::get('brand/status/{brand}',[BrandController::class,'status'])->name('brand.status');
    Route::get('brand/delete/{brand}',[BrandController::class,'delete'])->name('brand.delete');
    Route::get('brand/restore/{brand}',[BrandController::class,'restore'])->name('brand.restore');
    Route::get('brand/destroy/{brand}',[BrandController::class,'destroy'])->name('brand.destroy');
     //category

 
     //contact
     Route::get('contact_trash',[ContactController::class,'trash'])->name('contact.trash');
     Route::get('contact/status/{contact}',[ContactController::class,'status'])->name('contact.status');
     Route::get('contact/delete/{contact}',[ContactController::class,'delete'])->name('contact.delete');
     Route::get('contact/restore/{contact}',[ContactController::class,'restore'])->name('contact.restore');
     Route::get('contact/destroy/{contact}',[ContactController::class,'destroy'])->name('contact.destroy');
 //menu

 Route::get('menu_trash',[MenuController::class,'trash'])->name('menu.trash');
 Route::get('menu/status/{menu}',[MenuController::class,'status'])->name('menu.status');
 Route::get('menu/delete/{menu}',[MenuController::class,'delete'])->name('menu.delete');
 Route::get('menu/restore/{menu}',[MenuController::class,'restore'])->name('menu.restore');
 Route::get('menu/destroy/{menu}',[MenuController::class,'destroy'])->name('menu.destroy');

 //order

 Route::get('orderdetail_trash',[orderdetailController::class,'trash'])->name('orderdetail.trash');
 Route::get('orderdetail/status/{orderdetail}',[orderdetailController::class,'status'])->name('orderdetail.status');
 Route::get('orderdetail/delete/{orderdetail}',[orderdetailController::class,'delete'])->name('orderdetail.delete');
 Route::get('orderdetail/restore/{orderdetail}',[orderdetailController::class,'restore'])->name('orderdetail.restore');
 Route::get('orderdetail/destroy/{orderdetail}',[orderdetailController::class,'destroy'])->name('orderdetail.destroy');
 //post

 Route::get('post_trash',[postController::class,'trash'])->name('post.trash');
 Route::get('post/status/{post}',[postController::class,'status'])->name('post.status');
 Route::get('post/delete/{post}',[postController::class,'delete'])->name('post.delete');
 Route::get('post/restore/{post}',[postController::class,'restore'])->name('post.restore');
 Route::get('post/destroy/{post}',[postController::class,'destroy'])->name('post.destroy');
//slider
Route::get('slider_trash',[sliderController::class,'trash'])->name('slider.trash');
Route::get('slider/status/{slider}',[sliderController::class,'status'])->name('slider.status');
Route::get('slider/delete/{slider}',[sliderController::class,'delete'])->name('slider.delete');
Route::get('slider/restore/{slider}',[sliderController::class,'restore'])->name('slider.restore');
Route::get('slider/destroy/{slider}',[sliderController::class,'destroy'])->name('slider.destroy');


 //brand
 Route::get('topic_trash',[topicController::class,'trash'])->name('topic.trash');
 Route::get('topic/status/{topic}',[topicController::class,'status'])->name('topic.status');
 Route::get('topic/delete/{topic}',[topicController::class,'delete'])->name('topic.delete');
 Route::get('topic/restore/{topic}',[topicController::class,'restore'])->name('topic.restore');
 Route::get('topic/destroy/{topic}',[topicController::class,'destroy'])->name('topic.destroy');
 //menu
    Route::post('menu/deleteAll', [MenuController::class, 'deleteAll'])->name('menu.deleteAll');
    Route::post('menu/trashAll', [MenuController::class, 'trashAll'])->name('menu.trashAll');
    Route::get('menu/status/{menu}',[MenuController::class,'status'])->name('menu.status');
    Route::get('menu/delete/{menu}',[MenuController::class,'delete'])->name('menu.delete');
    Route::get('menu/restore/{menu}',[MenuController::class,'restore'])->name('menu.restore');
    Route::get('menu/trash',[MenuController::class,'trash'])->name('menu.trash');
    Route::resource('menu', MenuController::class);
    //endmenu
    Route::get('product/trash',[ProductController::class,'trash'])->name('product.trash');
    Route::get('product/delete/{product}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('product/status/{product}',[ProductController::class,'status'])->name('product.status');
    Route::get('product/restore/{product}',[ProductController::class,'restore'])->name('product.restore');
    Route::resource('product', ProductController::class);
    /////cate
    Route::get('category/trash',[CategoryController::class,'trash'])->name('category.trash');
     Route::get('category/status/{category}',[CategoryController::class,'status'])->name('category.status');
     Route::get('category/delete/{category}',[CategoryController::class,'delete'])->name('category.delete');
     Route::get('category/restore/{category}',[CategoryController::class,'restore'])->name('category.restore');
     Route::resource('category', CategoryController::class);


});
//site - end
Route::get('{slug}', [SiteController::class, 'index' ])-> name ('site.slug');
