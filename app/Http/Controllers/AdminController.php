<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Parent_;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminp.index',[
        ]);
    }

    public function tables_index(){
        return view('adminp.tables');
    }

    public function register1(){
        return view('adminp.register1');
    }

    public function profile_index(){
        $auth = Auth::user();
        return view('adminp.profile.index',[
            'auth' => $auth,
        ]);
    }

    public function Admin()
    {
        $authdata = Auth::user();
        $usersdata = User::all();

        return view('adminp.index',[]);
    }


}
