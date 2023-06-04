<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class InfinityController extends Controller
{
    public function index()
    {
        $property = Property::where('status', '=', 'published')
        ->orderBy('created_at','desc')
        ->paginate(6);

        return view('blog.index', compact('posts'));
    }
}
