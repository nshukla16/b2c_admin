<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use View;

class HelpController extends Controller {
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

    //  FAQ 
	public function index() {
		return view('B2Cadmin/Helpsupport/faq');
	}
    // New Complaint
    public function newcomplaint() {
		return view('B2Cadmin/Helpsupport/newcomplaint');
	}

    // Old Complaint
    public function oldcomplaint() {
		return view('B2Cadmin/Helpsupport/oldcomplaint');
	}
	
	
}