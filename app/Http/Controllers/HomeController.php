<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Companyinfo;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Stone;

class HomeController extends Controller
{
    public function home()
    {
        $property = Property::limit(5)->get()->sortDesc();
        $newsdata = News::limit(5)->get()->sortDesc();
        $stonedata = Stone::limit(5)->get()->sortDesc();
        $companydata = Companyinfo::all();
        
        return view('home.index',[
            'companydata'=> $companydata,
            'propertydata' => $property,
            'link'=>1,
            'newsdata' => $newsdata,
            'stonedata' => $stonedata,

        ]);
    }

    public function home_property()
    {
        $property = Property::all()->sortDesc();
        return view('home.property',[
            'propertydata' => $property,
            'link'=>3,
        ]);
    }

    public function home_aboutus()
    {
        $companyinfo= Companyinfo::all();
        return view('home.aboutus',[
            'companyinfo'=> $companyinfo,
            'link'=>2,
        ]);
    }

    public function home_contact()
    {
        $companyinfo=Companyinfo::all();
        return view('home.contact',[
            'link'=>4,
            'companyinfo'=> $companyinfo,
        ]);
    }

    public function property_single($id)
    {
        $propertydata=Property::find($id);
        $companyinfo= Companyinfo::all();
        return view('home.singleproperty',[
            'propertydata' => $propertydata,
            'link'=>3,
        ]);
    }

    public function home_news()
    {
        $newsdata = News::all();
        $companyinfo= Companyinfo::all();
        return view('home.news',[
            'link'=>3.1,
            'newsdata'=> $newsdata,
        ]);
        
    }


    public function news_single($id)
    {
        $newsdata = News::find($id);
        $companyinfo= Companyinfo::all();
        return view('home.newssingle',[
            'link'=>3,
            'news'=> $newsdata,
        ]);
    }

    public function home_stone()
    {
        $stonedata = Stone::all();
        $companyinfo= Companyinfo::all();
        return view('home.stone',[
            'link'=>3.2,
            'stonedata'=> $stonedata,
            'companyinfo'=> $companyinfo,
        ]);
        
    }
}
