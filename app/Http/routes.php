<?php

Route::get('/login','curso@login');
Route::get('/index','curso@index');
Route::get('/tablas','curso@tablas');
Route::get('/inicio','curso@inicio');
//CLIENTES
Route::get('/altacliente','curso@altacliente');
Route::POST('/guardacliente','curso@guardacliente')->name('guardacliente');
Route::get('/reporte','curso@reporte');
Route::get('/modificac/{idc}','curso@modificac')->name('modificac');
Route::POST('/guardamodificac','curso@guardamodificac')->name('guardamodificac');
Route::get('/eliminac/{idc}','curso@eliminac')->name('eliminac');
Route::get('/restaurac/{idc}','curso@restaurac')->name('restaurac');
Route::get('/efisicac/{idc}','curso@efisicac')->name('efisicac');

//CHOFERES
Route::get('/altachofer','curso@altachofer');
Route::POST('/guardachofer','curso@guardachofer')->name('guardachofer');
Route::get('/reportechofer','curso@reportechofer');
Route::get('/modificacho/{idcho}','curso@modificacho')->name('modificacho');
Route::POST('/guardamodificacho','curso@guardamodificacho')->name('guardamodificacho');
Route::get('/eliminacho/{idcho}','curso@eliminacho')->name('eliminacho');
Route::get('/restauracho/{idcho}','curso@restauracho')->name('restauracho');
Route::get('/efisicacho/{idcho}','curso@efisicacho')->name('efisicacho');


//EMPLEADOS
Route::get('/altaempleado','curso@altaempleado');
Route::POST('/guardaempleado','curso@guardaempleado')->name('guardaempleado');

//PRODUCTOS
Route::get('/altaproducto','curso@altaproducto');
Route::POST('/guardaproducto','curso@guardaproducto')->name('guardaproducto');
Route::get('/reporteproducto','curso@reporteproducto');
Route::get('/modificapro/{idpro}','curso@modificapro')->name('modificapro');
Route::POST('/guardamodificapro','curso@guardamodificapro')->name('guardamodificapro');
Route::get('/eliminapro/{idpro}','curso@eliminapro')->name('eliminapro');
Route::get('/restaurapro/{idpro}','curso@restaurapro')->name('restaurapro');
Route::get('/efisicapro/{idpro}','curso@efisicapro')->name('efisicapro');














