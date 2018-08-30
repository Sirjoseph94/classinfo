<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    
    public function index(Tag $tag) {
        
        $tag = Tag::all();

        return view('pages.interests')->with('interests', $tag);
    }

  

    //fetch for the multiselect box
    public function fetch(Request $request) {

        $term = trim($request -> q);
        if (empty ($term) ) {
            return response()->json(['name']);
        }

        $tags = Tag::search($term)->limit(5)->get();
        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id'=>$tag->id, 'text'=>$tag->code];
        }
    
          $resp = response()->json($formatted_tags);
          return $resp;
    }

    public function delete(Tag $tag, $id)
    {
        $tag = Tag::find($id);

    }

   public function add(Request $request)
    {
        $this->validate($request, [
            'code' => 'required|string|max:7',
            'name' => 'required'
        ]);

         $tag = new Tag;
        
         $tag->code = $request->input('code');
         $tag->name = $request ->input('name');
         $tag->save();
        

        return redirect('interests')->with($request->session()->flash('success', 'Interest was added successfully!'));
    }


}
