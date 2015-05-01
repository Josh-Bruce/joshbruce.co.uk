<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/**
	 * Array of social links
	 *
	 * @var array
	 */
	public static $social = [
		'github' 	=> 'https://github.com/Josh-Bruce',
		'linkedin' 	=> 'https://www.linkedin.com/profile/view?id=238599636',
		'twitter' 	=> 'https://twitter.com/Brucey125',
		'facebook' 	=> 'https://www.facebook.com/joshbrucie'
	];

	/**
	 * Show the application home page
	 *
	 * @return \Response
	 */
	public function index()
	{
		return view('pages.index')->with('social', self::$social);
	}

}
