<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Todo;

class IndexController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        return view('index',compact('item'));
    }

    public function about()
    {
        return view('about');
    }

    public function team()
    {
        return view('team');
    }

    public function lessons($url)
    {
        $lesson = Category::where('url',$url)->first();

        if (!$lesson){
            return redirect()->back();
        }
        return view('lesson',['lesson'=>$lesson]);
    }
    public function blog()
    {
        $blogs = Post::paginate(1);

        return view('blog',['blogs'=>$blogs]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function blogView($url)
    {
        if(config('app.locale') == 'hy'){
           $name = 'url';
        }
        if(config('app.locale') == 'ru'){

            $name = 'url_ru';
        }
        if(config('app.locale') == 'en'){

            $name = 'url_en';
        }

        $blog = Post::where($name,$url)->first();


        if (!$blog){
            return redirect()->back();
        }
        $blogs = Post::orderBy('view','DESC')->skip(0)->take(4)->get();

        Post::where('id',$blog->id)->update(['view'=>$blog->view+1]);
        return view('blogView',['blog'=>$blog,'blogs'=>$blogs]);
    }

    public function logo()
    {
        return view('logo');
    }

    public function card()
    {
        return view('card');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function order()
    {
        return view('order');
    }

    public function html()
    {
        return view('html');
    }
    public function react()
    {
        return view('react');
    }
    public function oop()
    {
        return view('oop');
    }
    public function js()
    {
        return view('js');
    }
    public function php()
    {
        return view('php');
    }
     public function web()
    {
        $lessons = Category::whereNull('parent_id')->get();
        return view('lessons',['lessons'=>$lessons]);
    }
	 public function design()
    {
        return view('design');
    }
	 public function banners()
    {
        return view('banners');
    }
}
