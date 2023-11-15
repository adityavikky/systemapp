<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Unitkerjalanjutans;

class UsersController extends Controller
{
    public function index(){
        return view('menu.permintaan.support');
    }
    
    public function nameUser(){
        $data = Users::where('name', 'LIKE', '%'.request('q'). '%')->paginate(10);
        return response()->json($data);
    }
    
    public function nameStaff(){
        $data = Unitkerjalanjutans::where('name', 'LIKE', '%'.request('q'). '%')->paginate(10);
        return response()->json($data);
    }

    public function nameUnit($id){
        $data = Users::where('name', $id)->where('name', 'LIKE', '%'.request('q'). '%')->paginate(10);
        return response()->json($data);
    }
}

?>