<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use View;

class HomeController extends Controller {
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
		return view('B2Cadmin/Dashboard/dashboard');
	}

	public function login() {
		return view('B2Cadmin/login');
	}

	public function getotp() {
		return view('B2Cadmin/otp');
	}

	public function setupstore() {
		return view('B2Cadmin/setupstorenew');
	}
	
	public function storeweblink() {
		return view('B2Cadmin/storeweblink');
	}

	public function bustype() {
		return view('B2Cadmin/businesstype');
	}
	
	public function banner() {
		return view('B2Cadmin/Banners/banner');
	}

	public function discount() {
		return view('B2Cadmin/Discount/discount');
	}

	public function category() {
		return view('B2Cadmin/Categories/category');
	}
	
	public function subcategory() {
		return view('B2Cadmin/Subcategories/subcategory');
    }

	public function attributesview() {
		
		return view('B2Cadmin/Attributes/attributes');
    }
	
	public function weblink() {
		return view('B2Cadmin/weblink');
    }
	public function check_link(Request $req)
	{
 		$chk=admin::where('web_address','LIKE','%'.$req->val.'%')->get();
		//  return $chk;
		if($chk->count()>0)
		{
			return response()->json(['status'=>false,'msg'=>'Link already exist..!!']);
		}else {
			return response()->json(['status'=>true,'msg'=>'Available..!!']);
		}
	}
	public function link_save(Request $req)
	{
		print_r($req->all());
		$chk=admin::where('id','=','1')->update(array('web_address'=>'www.'.$req->link_cl.'.bechobazar.com'));
		if($chk)
		{
			return redirect('/weblink')->with('success','www.'.$req->link_cl.'.bechobazar.com');
		}else {
			return redirect()->with('error','Try again');
		}
	}

	
	
}