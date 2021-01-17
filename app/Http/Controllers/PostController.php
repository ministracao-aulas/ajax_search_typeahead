<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function typeahead()
    {
    	return view('post_typeahead');//bootstrap3-typeahead.min.js
    }

    public function select2()
    {
    	return view('post_select2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        /*
         * typeahead: ?query=some
         * select2: ?_type=query&term=some
         */
        // $search = $request->input('query') ?? $request->input('_type') ?? null;
        $search = $request->input('_type') && $request->input('_type') == 'query' && $request->input('term') ? $request->input('term') : null;

        if($search)
            $data = Post::select("id as identifyer", "title as name","image as img")
                    ->where("title","LIKE","%{$search}%")->limit(100)->get();
        else
            $data = [];

        return response()->json($data);
    }
}
