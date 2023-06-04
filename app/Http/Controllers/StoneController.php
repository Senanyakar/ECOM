<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stone;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class StoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stonedata = Stone::all();
        return view ('adminp.stone.index',[
            'stonedata' => $stonedata,
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminp.stone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stonesdata = new Stone();
        $stonesdata -> id= $request->id;
        $stonesdata -> user_id=Auth::user()->id;
        $stonesdata -> title = $request->title;
        $stonesdata -> keyword = $request->keyword;
        $stonesdata -> description = $request->description;
        if($request->file('image'))
        {
            $stonesdata->image=$request->file('image')->store('image');
        }
        $stonesdata -> save();
        return redirect(route('admin_news_index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('adminp.stone.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('adminp.stone.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stonesdata = new Stone();
        $stonesdata -> id= $request->id;
        $stonesdata -> user_id=Auth::user()->id;
        $stonesdata -> title = $request->title;
        $stonesdata -> keyword = $request->keyword;
        $stonesdata -> description = $request->description;
        if($request->file('image'))
        {
            $stonesdata->image=$request->file('image')->store('image');
        }
        $stonesdata -> save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Stone::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('/backoffice/stone');
    }
}
