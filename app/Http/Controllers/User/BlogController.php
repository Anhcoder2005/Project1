<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;




class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $user = Auth::user();

        $email = $user->email;

        $post = DB::table('blogs')->select('*');
        $post = $post->get();

        return view('blog/blog', compact('post', 'email'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        if ($request->getMethod() == 'POST') {
            
            // handle photo
            $fileimage = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $fileimage);


            $Post = new Blog;
            $Post->authorBlog = Auth::user()->name;
            $Post->releaseDateBlog = now();
            $Post->titleBlog = $request->title; 
            $Post->postBlog = $request->content;
            $Post->photoBlog = $fileimage;
            $Post->save();

            
            return redirect()->route('blog');
        }

        if ($request->getMethod() == 'GET'){
            $user = Auth::user();
            $email = $user->email;

            return view('blog/createPost', ['email' => $email]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = DB::table('blogs')->where('id', $id);
        $post = $post->get();
        $user = Auth::user();
        $email = $user->email;

        return view('blog/post', compact('email', 'post'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    protected function storeImage(Request $request) {
        $path = $request->file('photo')->store('public/storage/profile');
        return substr($path, strlen('public/storage'));
    }
}
