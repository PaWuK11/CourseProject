<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function homeback(): Factory|View|Application
    {
        $posts = Post::orderBy('id','desc')->paginate(3);

        return view('home', compact('posts'));
    }

}
