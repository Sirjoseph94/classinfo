<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Tag;

class ProfileController extends Controller
{
    
    // Retrive user details from user id
    public function index() {

    $user = auth()->user();
    // $user = App\User::find($user_id);

    //$tag = $user -> tags;
   
    return view('pages.profile')->with('user', $user);
    }

    public function addInterest(Request $request) {
        
        
        $tag = $request -> input('interest_select');

        //get user
        $user = auth()->user();

        //tag interest with user
        $user->tags()->attach($tag);

        return redirect('profile')->with($request->session()->flash('success', 'Interest was added successfully!'));



    }
}
