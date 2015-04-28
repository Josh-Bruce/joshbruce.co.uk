<?php namespace App\Http\Controllers;

class PagesController extends Controller {

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
