<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class HomeController extends Controller
{

	public function validSession($req){

		if($req->session()->has('user')){
            $type=$req->session()->get('type');
			return true;
		}else{
			return false;
		}
	}

    public function index(Request $req){
		
		if($this->validSession($req)){
			return view('home.index');
		}else{
			return redirect()->route('login.index');
		}
    }

    public function add(){

    	return view('home.add');
    }

    public function create(Request $req){

    	$user = new User();
    	$user->uname = $req->uname;
    	$user->password = $req->password;
    	$user->ename = $req->ename;
    	
    	//$user->type = "user";
    	$user->save();

    	$data = User::where('uname', $req->uname)->where('password', $req->password)->get();
    	return redirect()->route('home.details', $data[0]->userId);
    }

	public function details($id){

		$std = User::find($id);
		
		return view('home.details', ['std'=>$std]);
    }

    public function show(){

    	$eList = User::all();
    	return view('home.elist', ['std'=> $eList]);
    }
	
	public function edit($id){

		$std = User::find($id);
		return view('home.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

    	$user = User::find($id);

    	$user->username = $req->uname;
    	$user->name = $req->name;
    	$user->dept = $req->dept;
    	$user->cgpa = $req->cgpa;
    	$user->save();

		return redirect()->route('home.elist');
    }
	public function delete($id){

		$std = User::find($id);
		return view('home.delete', ['std'=>$std]);
    }

    public function destroy($id){

		User::destroy($id);
		return redirect()->route('home.elist');
	}

    public function profile(){

        return view('home.profile');
    }

    public function upload(Request $req){


        if($req->hasFile('pic')){

            $file = $req->file('pic');

/*          echo "Name: ".$file->getClientOriginalName();
            echo "<br>Extension: ".$file->getClientOriginalExtension();
            echo "<br>Size: ".$file->getSize();
            echo "<br>Mime Type: ".$file->getMimeType();
*/
            if($file->move('upload', $file->getClientOriginalName())){
                echo "success";
            }else{
                echo "error";
            }

        }else{
            echo "File upload error!";
        }

    }
}
