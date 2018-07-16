<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    	public function __construct(){

            $this->middleware('auth')->except(['index', 'show']);//u must be logged in to create a post, but can see all post without logging in


        }

    	public function index(){
           
      $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
       ->groupBy('year', 'month')
       ->orderByRaw('min(created_at) desc')
       ->get()
       ->toArray();



    		$posts = Post::latest();//Post::orderBy('created_at', 'desc')->get();

            if($month = request('month')){

                $posts->whereMonth('created_at', Carbon::parse($month)->month);//Jan => 1, Feb => 2
                

            }

            if($year = request('year')){

                $posts->whereYear('created_at', $year);
                 

            }
           
            $posts = $posts->get();

            /*if(isset($filters['month']) && $month = $filters['month']){

                $posts->whereMonth('created_at', 1);

            }
            */
          
            //$posts = Post::latest()->filter(request(['month', 'year']))->get();
    		return view('posts.index', compact('posts', 'archives'));


    	}


    	public function show($id){

    		$post = Post::find($id);

    		return view('posts.show', compact('post'));


    	}


    	public function create(){

    		return view('posts.create');


    	}

    	public function store(){

    		//dd(request()->all());

    		//dd(request(['title', 'body']));

    		//Create a new post using the request data

    		//Save it to the database

    		//And then redirect to the home page

    		/*$post = new Post;

    		$post->title = request('title');

    		$post->body = request('body');

    		$post->save();

    		return redirect('/');
    		*/

    		//Post::create(request()->all());

    		$this->validate(request(),[

    			'title' => 'required',
    			'body' => 'required'


    			]);

            auth()->user()->publish(

                new Post(request(['title', 'body']))

            );
            /*
    		Post::create([

                'title' => request('title'),
                'body' => request('body'),
                'user_id' => auth()->id()


            ]);
            */

    		return redirect('/');

    	}
}
