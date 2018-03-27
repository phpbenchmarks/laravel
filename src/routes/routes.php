<?php

Route::get('/overload', 'Overload\Http\EmptyController@index')->middleware('change-language');

Route::get('/main', 'Overload\Http\MainController@index')->middleware('change-language');

