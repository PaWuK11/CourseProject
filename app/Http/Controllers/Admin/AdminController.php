<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;

class AdminController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function create_post(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = $request->all();

        $post = Post::create($data);

        return redirect()->route('view_posts');
    }

    /**
     * @return View|Factory|Application
     */
    public function create_posts(): View|Factory|Application
    {
        return view('adminpanel.create');
    }
    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('adminpanel.admin');
    }

    public function view_posts(): Factory|View|Application
    {
        $posts = Post::orderBy('id','desc')->get();

        return view('adminpanel.posts', compact('posts'));
    }


    /**
     * @return Factory|View|Application
     */
    public function edit_posts($id): Factory|View|Application
    {
        $post = Post::find($id);
        return view('adminpanel.edit', compact('post'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id): Redirector|RedirectResponse|Application
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->update();

        return redirect('adminpanel.posts');
    }
}
