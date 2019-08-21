<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegController extends Controller
{
    //
    public function index(){	

		return view('registration.index');
	}

	public function submit(Request $req){	

		//DB::insert('insert into user (id, ename, uname, password, contact) values ("", ?, ?, ?, ?)');

		$id = DB::table('user')->insertGetId(
			    ['username' => $req->input('username'), 
			    'password' => $req->input('password'), 
			    'type' => $req->input('type')]
				);
		
		if ($id>0) {
			return redirect()->route('login.index');
	
		}

		//print_r($req->input());
			
	}	
}
