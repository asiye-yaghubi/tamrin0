<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::latest()->paginate(6);
        return view('comment.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        $articles = Article::get();
        $itemes = [
            "users" => $users,
            "articles" => $articles
        ];
        return view('comment.add',compact('itemes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'comment' => 'required|string',
            'title' => 'required',
            'name' => 'required',
        ]);
        $user = DB::table('users')->where('name',$request['name'])->first();
        $article = DB::table('articles')->where('title',$request['title'])->first();

        Comment::create([
            'comment'=> $request['comment'],
            'user_id' => $user->id,
            'article_id' => $article->id
        ]);
            // Session::flash('store','کامنت جدید ذخیره شد');
            session()->flash('store','کامنت جدید ذخیره شد');
        return redirect('/comment/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
    public function add(Article $article)
    {
        // return $article;die;

        Comment::create([
            'user_id'=> auth()->user()->id, 
            'article_id'=> $article->id,
            'comment'=>request('comment')
        ]);
        return back();
    }
}
