<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Tag;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Tag  $tag = null)
    {
        // if (Gate::allows('admin-access', Auth::user())) {
            // The current user can access admin panel...
            $user_id = auth()->user()->id;
            $news = News::where('user_id', $user_id)->orderBy('created_at', 'desc')->simplePaginate(5);
           // $news = $user->news;
           //$userNews = $news;
         //  dd($news->);
            return view('pages.admin')->with('news', $news);
        }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //handled in news controller
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('admin.show')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = auth()->user()->id;
        $news = News::where('user_id', $user_id)->where('id', $id)->first();
        return view('admin.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:100',
            'message' => 'required'
        ]);
        $news->tags()->dettach($tag);
        //$news = new News;
        $news->title = $request->input('title');
        $news->message = $request ->input('message');
        $news->user_id = $request -> input('user_id');
        $news->save();
        $news->tags()->dettach($tag);
        return redirect('admin')->with($request->session()->flash('success', 'Information was updated successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //DB::table('news')->delete()
        $news = News::find($id);
        $news->delete();
        return redirect('admin')->with('news', $news, $request->session()->flash('success', 'Information was Deleted successfully!'));

    }
}
