<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Parent_;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $propertydata=Property::all();
        return view('adminp.property.index',[
            'propertydata' => $propertydata,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = 1)
    {

        return view('adminp.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Property;
        $data -> id= $request->id;
        $data -> user_id=Auth::user()->id;
        $data -> amenities= $request->amenities;
        $data -> title= $request->title;
        $data -> keywords= $request->keywords;
        $data -> description= $request->description;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('image');
        }
        if($request->file('floorplans'))
        {
            $data->image=$request->file('floorplans')->store('floorplans');
        }
        $data -> price= $request->price;
        $data -> location= $request->location;
        $data -> locationlink= $request->locationlink;
        $data -> area= $request->area;
        $data -> baths= $request->baths;
        $data -> beds= $request->beds;
        $data -> garage= $request->garage;
        $data -> videolink= $request->videolink;
        $data -> status= $request->status;
        $data -> save();

        return redirect(route('admin_property_index'))->with("Property Created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property,$id)
    {
        $propertyshow=Property::find($id);
        return view('adminp.property.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, $id)
    {
        $property=Property::find($id);
        return view('adminp.property.edit',[
            'property'=>$property,


        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property, $id)
    {
        $data = Property::find($id);
        $data -> user_id=Auth::user()->id;
        $data -> amenities= $request->amenities;
        $data -> title= $request->title;
        $data -> keywords= $request->keywords;
        $data -> description= $request->description;
        if($request->file('image'))
        {
            $data->image=$request->file('image')->store('images');
        }
        $data -> price= $request->price;
        $data -> location= $request->location;
        $data -> locationlink= $request->locationlink;
        $data -> area= $request->area;
        $data -> baths= $request->baths;
        $data -> beds= $request->beds;
        $data -> garage= $request->garage;
        $data -> videolink= $request->videolink;
        $data -> status= $request->status;
        $data -> save();

        return redirect('/backoffice/property');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property,$id)
    {
        $data = property::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('/backoffice/property');
    }
}