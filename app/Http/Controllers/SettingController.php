<?php

namespace App\Http\Controllers;

use App\Models\Companyinfo;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings_index()
    {
        return view('adminp.setting.company.index');
    }
    public function settings_edit()
    {
        return view('adminp.setting.company.edit');
    }
    public function settings_update()
    {
        $companyinfo = Companyinfo::all();
        return view('adminp.setting.company.update',[
            'conpanyinfo'=> $companyinfo,
            
        ]);
    }
}
