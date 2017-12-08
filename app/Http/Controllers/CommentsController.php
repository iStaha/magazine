<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

use App\Post;

use Auth;
use Carbon\Carbon;



class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request )
    {
       $this->validate($request, [
            'name'=>'required|max:100',
            'email' =>'required',
            'message' =>'required',
            ]);

       /* dd($request['need']);
           dd($request->all());*/
        $comment = Comment::create($request->all());

       /* $post = Post::findOrFail($request['need']);*/

        $comment->post_id = $request['need'];
       

        $comment->save();
          
        return back()
            ->with('flash_message', 'Comment,
             '. $comment->message.' Added');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(Comments $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit(Comments $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comments $comments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comments $comments)
    {
        //
    }
}
