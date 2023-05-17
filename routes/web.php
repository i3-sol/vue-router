<?php
Route::get('/{any}', 'PagesController@indeX')->where('any', '.*');

