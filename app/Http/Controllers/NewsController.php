<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsdata = News::all();
        return view ('adminp.news.index',[
            'newsdata' => $newsdata,
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = 1)
    {
        return view ('adminp.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsdata = new News();
        $newsdata -> id= $request->id;
        $newsdata -> user_id=Auth::user()->id;
        $newsdata -> title = $request->title;
        $newsdata -> keyword = $request->keyword;
        $newsdata -> description = $request->description;
        $newsdata -> content1 = $request->content1;
        $newsdata -> content2 = $request->content2;
        if($request->file('image'))
        {
            $newsdata->image=$request->file('image')->store('image');
        }
        $newsdata -> save();
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
        $newsdata = News::find($id);
        return view('news_single',["newdata"=>$newsdata]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsedit = News::find($id);
        return view('adminp.news.edit',[
            "newsdata"=>$newsedit,
        ]);
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
        $newsdata = News::find($id);
        $newsdata -> id= $request->id;
        $newsdata -> user_id=Auth::user()->id;
        $newsdata -> title = $request->title;
        $newsdata -> keyword = $request->keyword;
        $newsdata -> description = $request->description;
        $newsdata -> content1 = $request->content1;
        $newsdata -> content2 = $request->content2;
        $newsdata -> ref1 = $request->content2;
        $newsdata -> ref1auther = $request->content2;
        $newsdata -> ref2 = $request->content2;
        $newsdata -> ref2auther = $request->content2;
        if($request->file('image'))
        {
            $newsdata->image=$request->file('image')->store('image');
        }
        $newsdata -> save();

        return redirect()->route('admin_news_index')->with("Property Created successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::find($id);
        $news->delete();
        return redirect(route('admin_news_index'))->with("News Created successfully");
    }
}
