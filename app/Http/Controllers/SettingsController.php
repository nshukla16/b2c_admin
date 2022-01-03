<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use View;

class SettingsController extends Controller {
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
		return view('B2Cadmin/Settings/settings');
	}

	public function paymentsetup() {
		return view('B2Cadmin/Settings/paymentsettings');
	}

	public function accountsetup() {
		return view('B2Cadmin/Settings/accountsettings');
	}

	public function homesetup() {
		return view('B2Cadmin/Settings/homepagesettings');
	}

	public function weblink() {
		return view('B2Cadmin/Settings/weblink');
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