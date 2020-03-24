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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pdf', 'PDFController@PDF')->name('decargarPDF');
Route::get('/pdfproductos', 'PDFController@PDFProductos')->name('decargarPDFProductos');
Route::get('/pdfproductoshorizontal', 'PDFController@PDFProductosHorizontal')->name('decargarPDFProductosHorizontal');
Route::get('/guardarpdf', 'PDFController@guardarpdf')->name('guardarpdf');


