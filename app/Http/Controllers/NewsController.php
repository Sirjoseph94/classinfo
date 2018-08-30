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

        
        
        // $news = News::->simplePaginate(5);
        $user_id = auth()->user()->id;
        $user = User::with('tags.news')->find($user_id);
        
    
 
         $tags = $user->tags->pluck('id'); // in L < 5.3 it was lists()
        //  dd($postsArray);

         $news = News::whereHas('tags', function($q) use ($tags) {
             $q->whereIn('id', $tags);
         })->orderBy('created_at', 'desc')->get();
        //  $news = collect($postsArray)->collapse()->unique();
        

        return view('pages.news')->with('news', $news);
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
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:100',
            'message' => 'required'
        ]);

            $tag = $request -> input('interest_select');
           // $user = Auth::user();
        //    $news =  auth()->user()->news()->create($request->except(['_token']));
         $news = new News;
        
         $news->title = $request->input('title');
         $news->message = $request ->input('message');
         $news->user_id = $request -> input('user_id');
         $news->save();
         $news->tags()->attach($tag);
        

        return redirect('admin')->with($request->session()->flash('success', 'Information was sent successfully!'));
    }

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
