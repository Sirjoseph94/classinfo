<?php

namespace App\Http\Controllers;

use App\News;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Tag;
use App\User;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tag $tag = null )
    {
        //$tags = tags()->id;
        $user_id = auth()->user()->id;
        $user = User::with('tags.news')->find($user_id);
        
        $tag_id = $user->tags->pluck('id');

         $news = News::whereHas('tags', function($q) use ($tag_id) {
             $q->whereIn('id', $tag_id);
         })->orderBy('created_at', 'desc')->get();


         $tag_code = (Tag::has('news'))->pluck('code');
        return view('pages.news', compact($tag_code))->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view ('pages.show')->with('news', $news );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $id)
    {
        $news = News::find($id);
        $news->tags()->attach($tag);
        return view('admin.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news = News::find($id);

    }
}
