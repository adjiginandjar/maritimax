<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Resources\ListPostResource;
use App\Http\Resources\ListPostsResource;
use App\Http\Resources\PostResource;
use App\CategoryPost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::paginate(10);
      return view('si.pages.list.post',compact('posts'))
          ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categoryPost = CategoryPost::all();
      return view('si.pages.form.addpost',compact('categoryPost'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->request->add(["slug"=>str_slug($request['title'])]);
      $request->request->add(["user_id"=>1]);

      if($request->has('img_upload')){
        $file = $request->file('img_upload');
  		  $fileName= time().trim($file->getClientOriginalName());
  		  $file->move('images', $fileName);

        $request->request->add(["img_cover"=>url('/').'/images/'.$fileName]);
      }

      $post = Post::create($request->all());

      return redirect()->route('post.index')
                        ->with('success','Creating successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      $categoryPost = CategoryPost::all();
      return view('si.pages.form.editpost',compact('categoryPost','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $request->request->add(["slug"=>str_slug($request['title'])]);

      if($request->has('img_upload')){
        $file = $request->file('img_upload');
  		  $fileName= time().trim($file->getClientOriginalName());
  		  $file->move('images', $fileName);

        $request->request->add(["img_cover"=>url('/').'/images/'.$fileName]);
      }

      $post->update($request->all());

      return redirect()->route('post.index')
                        ->with('success','Creating successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();

      return response()->json(null,204);
    }

    public function getDetail(Post $post){
      return new PostResource($post);
    }

    public function paginate($limit)
    {
        return ListPostResource::collection(Post::paginate($limit));
    }
}
