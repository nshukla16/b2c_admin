<?php

namespace App\Http\Controllers;

use View;

class BrandController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {

	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */

	public function index() {
		return view('B2Cadmin/Brand/brands');
	}


	
	
}