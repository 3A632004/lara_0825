<?php


namespace App\Http\Controllers;


class PostsController extends Controller
{
    public function index()
    {
        //
        return view('index');
    }


    public function show()
    {
        //
        return view('post');
    }


    public function about()
    {
        //
        return view('about');
    }

    public function contact()
    {
        //
        return view('contact');
    }
}
