<?php

Route::middleware('role:admin')->group(function(){

    Route::get('/roles', 'RoleController@index')->name('roles.index');
    Route::post('/roles', 'RoleController@store')->name('roles.store');
    Route::delete('/roles/{role}/destroy', 'RoleController@destroy')->name('roles.destroy');
    Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
    Route::put('/roles/{role}/update', 'RoleController@update')->name('roles.update');
    Route::put('/roles/{role}/attach', 'RoleController@attach_permission')->name('role.permission.attach');
    Route::delete('/roles/{role}/detach', 'RoleController@detach_permission')->name('role.permission.detach');

});