<?php
Route::get('/{any}', 'PagesController@index')->where('any', '.*');

