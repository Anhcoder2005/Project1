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

        $post = DB::table('blogs')->select('*')->paginate(5);
        // $post = $post->get();

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

            // echo dd($request);
            $Post = new Blog;
            $Post->authorBlog = Auth::user()->name;
            $Post->releaseDateBlog = now();
            $Post->titleBlog = $request->title; 
            $Post->postBlog = $request->contentPost;
            $Post->htmlBlog = $request->dataPost;
            $Post->photoBlog = $fileimage;
            $Post->save();

            
            return redirect()->route('blog');
        }

        if ($request->getMethod() == 'GET'){
            $user = Auth::user();
            $email = $user->email;

            return view('blog/createPost', ['email' => $email,  'edit' => 'flase']);
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

    public function myArticle(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;

        $sort = Blog::sortable()
                    ->where('authorBlog', $name)
                    ->paginate(10);
        
        return view('blog/myArticle', compact('email', 'sort'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {

        if ($request->getMethod() == 'GET'){
            $user = Auth::user();
            $email = $user->email;

            $post = DB::table('blogs')->where('id', $id);
            $post = $post->get();

            
            return view('blog/editPost', ['post' => $post, 'email' => $email]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $Post = Blog::find($id);
        if(($request->image) ){
            $fileimage = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images', $fileimage);
        }else{
            $fileimage = $Post->photoBlog;
        }

        if(($request->dataPost) and ($request->contentPost)){
            $data = $request->dataPost;
            $content = $request->contentPost;
        }else{
            $content = $Post->postBlog;
            $data = $Post->htmlBlog ;
            
        }
        
        $Post->titleBlog = $request->title; 
        $Post->postBlog = $content;
        $Post->htmlBlog = $data;
        $Post->photoBlog = $fileimage;
        
        $Post->save();

        return redirect()->route('myArticle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Post = Blog::find($id);
        $Post->delete();

        return redirect()->route('myArticle');
    }

    protected function storeImage(Request $request) {
        $path = $request->file('photo')->store('public/storage/profile');
        return substr($path, strlen('public/storage'));
    }
}
