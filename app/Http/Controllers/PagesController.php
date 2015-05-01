<?php namespace App\Http\Controllers;

class PagesController extends Controller {

	/**
	 * Array of social links
	 *
	 * @var array
	 */
	public static $social = [
		'github' 	=> '',
		'linkedin' 	=> '',
		'twitter' 	=> '',
		'facebook' 	=> ''
	];

	/**
	 * Show the application home page
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.index');
	}

}
