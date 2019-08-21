<?php

namespace App\Http\Controllers;

use App\User;
use App\Car;
use App\Order;
use Illuminate\Http\Request;
use validator;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validSession($req){

        if($req->session()->has('user')){
            $type=$req->session()->get('type');
            return true;
        }else{
            return false;
        }
    }

    public function index(Request $req)
    {
        //
        if($this->validSession($req)){
            return view('home.admin');
        }else{
            return redirect()->route('login.index');
        }
    }

    public function index1(Request $req)
    {
        //
        if($this->validSession($req)){

            $pList = Car::all();
            return view('home.member',['pas'=>$pList]);

        }else{
            return redirect()->route('login.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function details($id){

        $stf = User::find($id);
        
        return view('home.details', ['stf'=>$stf]);
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $List = User::all();
        return view('home.MemberDetail', ['stuff'=>$List]);
        //echo "$List";
    }

    public function destroy($id){

        User::destroy($id);
        return redirect()->route('home.MemberDetail');
    }

    public function showp()
    {
        //
        $pList = Car::all();
        return view('home.carDetail', ['pas'=>$pList]);
        //echo($pList);
    }

    public function caredit($id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Car::find($id);
        return view('home.caredit', ['rt'=>$rt]);
      
    }

    public function carupdate(Request $req, $id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Car::find($id);

        $rt->name = $req->name;
        $rt->type = $req->type;
        $rt->cost = $req->cost;
        $rt->available = $req->available;
        $rt->save();

        //echo "$rt";

        return redirect()->route('home.carDetail',['rt'=>$rt]);     
    }

    public function cardlt($id){

        $rt = Car::find($id);
        return view('home.cardlt', ['rt'=>$rt]);
    }


    public function cardestroy($id){

        Car::destroy($id);
        return redirect()->route('home.carDetail');
    }

    public function add(){

        return view('home.entry');
    }

    public function create(Request $req){

        // $car = new Car();
        // $car->name = $req->name;
        // $car->type = $req->type;
        // $car->cost = $req->cost;
        // $car->available = $req->available;
        // //$user->type = "user";
        // $car->save();

        //$data = Car::where('name', $req->name)->where('type', $req->type)->get();
        //return redirect()->route('home.carDetail', $data[0]->userId);

        $id = DB::table('car')->insertGetId(
                ['name' => $req->input('name'), 
                'type' => $req->input('type'),
                'cost' => $req->input('cost'),
                'available' => $req->input('available'),
                ]
                );
        
        if ($id>0) {
            return redirect()->route('home.carDetail');
    
        }
    }

    public function showmanage($id)
        {
            //
            $rt = User::find($id);
            return view('home.manage', ['rt'=>$rt]);
          
        }

    public function showmanageM($id)
        {
            //
            $rt = User::find($id);
            return view('home.manageM', ['rt'=>$rt]);
          
        }

    public function manageedit($id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = User::find($id);
        return view('home.manageedit', ['rt'=>$rt]);
      
    }

    public function manageupdate(Request $req, $id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = User::find($id);

        $rt->username= $req->username;
        $rt->password= $req->password;
        $rt->save();

        //echo "$rt";

        return redirect()->route('home.manage',['rt'=>$rt]);     
    }

    public function manageeditM($id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = User::find($id);
        return view('home.manageeditM', ['rt'=>$rt]);
      
    }

    public function manageupdateM(Request $req, $id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = User::find($id);

        $rt->username= $req->username;
        $rt->password= $req->password;
        $rt->save();

        //echo "$rt";

        return redirect()->route('home.manageM',['rt'=>$rt]);     
    }

    public function order($id)
    {
        //
        $rt = Car::find($id);
        return view('home.order', ['rt'=>$rt]);
        //echo($id);
    }

    public function orderup(Request $req)
    {
        //
        //$rt = Stuff::find($id);
        // $rt = User::find($id);

        // $rt->username= $req->username;
        // $rt->password= $req->password;
        // $rt->save();

        // //echo "$rt";

        // return redirect()->route('home.manage',['rt'=>$rt]); 

        $id = DB::table('order')->insertGetId(
                ['name' => $req->input('name'), 
                'type' => $req->input('type'),
                'cost' => $req->input('cost'),
                'orderedby' => $req->input('orderedby'),
                'payment'=> $req->input('payment'),
                ]
                );
        
        if ($id>0) {
            return redirect()->route('home.member');
    
        }    
    }

    public function showorder()
    {
        //
        $detail = Order::all();
        return view('home.showorder', ['detail'=>$detail]);
        //echo "$List";
    }

    public function showordercar()
    {
        //
        $detail = Order::all();
        return view('home.orderedcar', ['detail'=>$detail]);
        //echo "$List";
    }





    public function showrate($id)
    {
        //
        $rt = Stuff::find($id);
        return view('home.rate', ['rt'=>$rt]);
        //echo($id);
    }

    public function showride($id)
    {
        //
        $rt = Stuff::find($id);
        return view('home.ride', ['rt'=>$rt]);
      
    }

    

    public function showovertime($id)
    {
        //
        $rt = Stuff::find($id);
        return view('home.overtime', ['rt'=>$rt]);
      
    }

    public function showbonus($id)
    {
        //
        $rt = Stuff::find($id);
        return view('home.bonus', ['rt'=>$rt]);
      
    }

    public function bonusedit($id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);
        return view('home.bonusadd', ['rt'=>$rt]);
      
    }

    public function bonusupdate(Request $req, $id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);

        
        $rt->Bonus = $req->Bonus;
        $rt->save();

        //echo "$rt";

        return redirect()->route('home.bonus',['rt'=>$rt]);     
    }

    public function penaltyedit($id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);
        return view('home.penaltyadd', ['rt'=>$rt]);
      
    }

    public function penaltyupdate(Request $req, $id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);

        
        $rt->Penalty = $req->Penalty;
        $rt->save();

        //echo "$rt";

        return redirect()->route('home.bonus',['rt'=>$rt]);     
    }


    public function rideadd($id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);
        return view('home.rideadd', ['rt'=>$rt]);
      
    }

    public function rideupdate(Request $req, $id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);

        $rt->FreeRide= $req->FreeRide;
        $rt->save();

        //echo "$rt";

        return redirect()->route('home.ride',['rt'=>$rt]);     
    }

    public function overtimeadd($id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);
        return view('home.overtimeadd', ['rt'=>$rt]);
      
    }

    public function overtimeupdate(Request $req, $id)
    {
        //
        //$rt = Stuff::find($id);
        $rt = Stuff::find($id);

        $rt->Overtime= $req->Overtime;
        $rt->save();

        //echo "$rt";

        return redirect()->route('home.overtime',['rt'=>$rt]);     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuff $stuff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stuff $stuff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Stuff $stuff)
    // {
    //     //
    // }
}
