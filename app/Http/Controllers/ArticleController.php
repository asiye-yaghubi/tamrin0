<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\DB;



class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {
        $articles = Article::latest()->paginate(6);
        $categories = Category::all();
        return view('article.index',compact('articles','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('article.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();die;

        $this->validate(request(),[
            "title"=> 'required',
            "demo"=> 'required',
            "text"=> 'required'

        ]);
       $article = Article::create([
            "title" => $request['title'],
            "demo" => $request['demo'],
            "text" => $request['text']
        ]);
        $id = DB::table('categories')->where('title',$request['category'])->first();
        // var_dump($id->id);die;
        $article->categories()->attach($id->id);
        // die("ddddddddd");
        // return redirect('/article');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.detail',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
    public function upload()
    {
        return view('article.uploade');
    }
    public function uploader(Request $request)
    {
        $file = $request->file('image');
        $filename = time()."-".$file->getClientOriginalName();
        $path = public_path('/images');
        $file->move($path , $filename);
        return back();
    }
}
