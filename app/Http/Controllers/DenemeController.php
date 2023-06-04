<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\News;

class DenemeController extends Controller
{
    public function livewire1(){

        $property = Property::limit(5)->get()->sortDesc();
        $newsdata = News::limit(5)->get()->sortDesc();
        return view('dnm.livewire1',[
            'propertydata' => $property,
            'link'=>1,
            'newsdata' => $newsdata,
        ]);

    }
    public function chatbot(){
        return view('home.chatpopup.index2');
    }
}
