<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogPost;

class blogPostController extends Controller
{
    public function savePost(Request $request) { 

        $this->validate($request, [
            'post_name' => 'required',
            'post_content' => 'required',
            
        ]);

        $post = new blogPost;

        $post->post_name = $request->post_name;
        $post->post_content = $request->post_content;
        $post->save();

        return view('blogPost')->with('successMsg','Posted Successfully.');

    }
    
}
