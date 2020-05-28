<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\InfoUser;
use App\Page;
use App\Tag;
use App\Photo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = User::find(2);
        // $category = Category::find(1);
        // $page = Page::find(1);
        // dd($category->pages);
        // dd($page->photos);
        // dd($user->pages);
        // dd($user->tags);
        // dd($user->photos);
        // dd($user->categories);
        // dd($user->info->bio);
        return view('home');
    }
}
