<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;

use App\Post;
use Auth;
use Session;
use App\Category;
use App\PostsCategory;
use File;
use Storage;
use Carbon\Carbon;
use DB;


/*Post::where('created_at', '>=', Carbon::now()->startOfMonth())->get(); */
/*$posts = Post::where( DB::raw('MONTH(created_at)'), '=', '7' )->get(); */
class PostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'clearance'])
            ->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        /*$posts = Post::orderby('id', 'desc')->paginate(3);*/


       /* $posts = Post::with('categories')->get();*/

              
         $General = Category::where('name', '=', 'General')->first();
         $posts= $General->posts()->orderby('id', 'title')->where('status', '=', 'active')->paginate(3);

        
         $Opinion = Category::where('name', '=', 'Opinion')->first();
         $posts1= $Opinion->posts()->paginate(2);
         $Polity = Category::where('name', '=', 'Polity')->first();
         $posts2=  $Polity->posts()->first();
         $Polity1 = Category::where('name', '=', 'Polity')->first();
         $posts3=  $Polity1->posts()->skip(1)->take(3)->get();
         $Gadgets1 = Category::where('name', '=', 'Gadgets')->first();
         $posts4= $Gadgets1->posts()->first();
         $Gadgets2 = Category::where('name', '=', 'Gadgets')->first();
         $posts5= $Gadgets2->posts()->skip(1)->take(3)->get();

         $Gadgets3 = Category::where('name', '=', 'Gadgets')->first();
         $posts6= $Gadgets3->posts()->skip(4)->take(1)->get();

         $Gadgets4 = Category::where('name', '=', 'Gadgets')->first();
         $posts7= $Gadgets4->posts()->skip(5)->take(3)->get();

         $Categ8 = Category::where('name', '=', 'Life')->first();
         $posts8= $Categ8->posts()->first();
         
         $Categ9 = Category::where('name', '=', 'Life')->first();
         $posts9= $Categ9->posts()->skip(1)->take(3)->get();

         $Categ10 = Category::where('name', '=', 'Video')->first();
         $posts10= $Categ10->posts()->first();
         
         $Categ11 = Category::where('name', '=', 'Video')->first();
         $posts11= $Categ11->posts()->skip(1)->take(3)->get();

         
         $posts12=Post::all()->random(5);
         
        
        

        /* dd($posts4);*/

        

       /* dd($Category->posts);*/
         
        /*  $posts = Post::with('categories')->get()*/
         
        /* dd($cats);*/
           
      /*  $posts = Category::with('posts')->get()->where('name','General');*/

      /*$Category = Category::all()->load('posts')->where('name','General');*/
    
        /*  foreach ($Category->posts as $values) {
   
echo "$values->title";
         /* foreach ($values as $value) {
    
}*/
/*}
dd("vhv");*//**/
      
        /* $collection=  $cats->posts->toArray();

          
         dd($collection);*/

       /*  foreach ($cats->posts()->all() as $picnic) 
        echo $picnic->title . ' ' ;*/

      /*    $posts = Post::all()->load('categories')*/


      /*$Category = Category::all()->load('posts')->where('name','General') */
     

        /*$posts  = compact('pos');
        dd($posts)*/
      /*  $posts = Post::all()->load('categories');
          dd($posts);
        foreach ($posts as $value) {
    echo "$value <br>";
}*/
      
        return view('posts.index', compact('posts','posts1','posts2','posts3','posts4','posts5','posts6','posts7','posts8','posts9','posts10','posts11','posts12'));
    }


    public function list () {
 

           $posts = Post::orderby('id', 'desc')->paginate(10);

           return view('posts.list', compact('posts'));
    }


    public function bymonth (Request $request) {
 

         /*  $posts = Post::orderby('id', 'desc')->paginate(10);*/

        /* if(Request::isMethod('get')){

         }

         if(Request::isMethod('post')){
            
         }*/

           $mon = $request['month'];

           $posts = Post::where( DB::raw('MONTH(created_at)'), '=', $mon )->get(); 

           return view('posts.bymonth', compact('posts'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

/*
         if($files=$request->file('img')){
        foreach($files as $i=> $file){
             

              if($i==0) {
            /*echo "$name";
            dd($name);*/
    /*        $imgName=$file->getClientOriginalName();

            $postImg->img= $imgName;
            $file->move(public_path('avatars'), $imgName);
            }
             if($i==1) {
            echo "$name";
            dd($name);
            $imgName1=$file->getClientOriginalName();
            $postImg->mainImg= $imgName1;
            $file->move(public_path('avatars'), $imgName1);
            }
            
        }
    }*/
        $this->validate($request, [
            'title'=>'required|max:100',
            'body' =>'required',
            'img' =>'required',
            ]);

        $title = $request['title'];
        $body = $request['body'];

        $imgName=$request->img->getClientOriginalName();
        $mainImg=$request->main->getClientOriginalName();

        
        $request->img->move(public_path('images'), $imgName);
        $request->main->move(public_path('images'), $mainImg);
         
      /*  $post = Post::create($request->only('title', 'body' ));*/
        $postImg = Post::create($request->all());
        $postImg->img= $imgName;

        $postImg->mainImg=  $mainImg;

        $postImg->user_id =Auth::user()->id;
        $postImg->save();
           
       
      /*  $category=  new Category;
        $category->name= $request['category'];
        $category->save();
        
        $pc =new PostsCategory;
        $pc->post_id = $postImg->id;
        $pc->category_id = $category->id;*/

         $pc =new PostsCategory;
         $pc->post_id = $postImg->id;


        $Categoryy = Category::where('name', '=', $request['category'])->first();
        
            if(!$Categoryy){
                 $category=  new Category;
                 $category->name= $request['category'];
                 $category->save();
                 $pc->category_id = $category->id;
                 $pc->save();
            }

            else{
              $pc->category_id = $Categoryy->id;
              $pc->save();
            }
        
        



        return redirect()->route('posts.index')
            ->with('flash_message', 'Article,
             '. $postImg->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

       

        return view ('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'body'=>'required'
        ]);



        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->status = $request->input('status');

        $file_path = app_path($post->img);

        $file_pathh = app_path($post->mainImg);
       
         
          /*echo "$request->img";
           dd($request['img']);*/
         if ($request['img']){

             if(File::exists($file_path)) {
              File::delete($file_path );
        }
             $imgName= $request->img->getClientOriginalName();
             
           $request->img->move(public_path('images'), $imgName);
            $post->img= $imgName;    
      

         }

     /*    
         dd( $imgName=$request->img->getClientOriginalName());*/
        

          if ($request['main']){

             if(File::exists($file_pathh)) {
              File::delete($file_pathh);
        }

              $mainImg= $request->main->getClientOriginalName();
              $request->main->move(public_path('images'), $mainImg);
              $post->mainImg= $mainImg;
            
         }

          $Cate = Category::where('name', '=', $request->input('category'))->first();

         $cId= $Cate->id;

         $post->save();

        /*  $post->categories->save($Cate);  */

        /*$post->categories()->updateExistingPivot($category_id, $cId);


*/
       /* $post->tags()->detach(32);*/
        $post->categories()->sync($cId);
      

        
     /*   $post->categories()->sync($id);*/
      /*  $post->categories()->attach($id);*/

        return redirect()->route('posts.show', 
            $post->id)->with('flash_message', 
            'Article, '. $post->title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
       
        $file_path = app_path($post->img);
        $file_pathh = app_path($post->mainImg);
        if(File::exists($file_path)) {
            File::delete($file_path );
        }
         if(File::exists($file_pathh)) {
            File::delete($file_pathh);
        }
         $post->find($id)->categories()->detach();
         $post->delete();

       


        return redirect()->route('posts.index')
            ->with('flash_message',
             'Article successfully deleted');
    }
}
