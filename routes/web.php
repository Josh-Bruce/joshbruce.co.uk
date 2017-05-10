<?php

Route::get('/', function () {
    return view('index')->with(['social' => [
		'github' 	=> 'https://github.com/Josh-Bruce',
		'linkedin' 	=> 'https://www.linkedin.com/profile/view?id=238599636',
		'twitter' 	=> 'https://twitter.com/Brucey125',
		'facebook' 	=> 'https://www.facebook.com/joshbrucie'
	]]);
});
