<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stuff;
use Illuminate\Support\Facades\DB;

class ForgotController extends Controller
{
    //
    public function index(){	

		return view('login.forgot');
	}

	public function verify(Request $req){	
		

		$result = DB::table('stuffs')->where('username', $req->username)
				->where('StuffType',$req->StuffType)
				->get();
		
		if(count($result) > 0){

			$req->session()->put('user', $req->username);
			$req->session()->put('id', $result[0]->id);
			$req->session()->put('password', $result[0]->password);
			return redirect()->route('login.showpass');
		}else{
			$req->session()->flash('msg', 'invalid Information');
			return redirect()->route('login.forgot');
			//return view('login.index');
		}


	}

	public function showpass(Stuff $stuff)
    {
        //
        $rt = Stuff::all();
        return view('login.showpass', ['rt'=>$rt]);
        //echo "$rt";
    }
}
