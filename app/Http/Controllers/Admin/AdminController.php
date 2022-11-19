<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
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

        Post::create($data);

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
        $users = User::where('is_admin', '0')->count();

        $posts = Post::all()->count();

        return view('adminpanel.admin', compact('users', 'posts'));
    }

    public function view_posts(): Factory|View|Application
    {
        $posts = Post::orderBy('id','desc')->get();

        return view('adminpanel.posts', compact('posts'));
    }


    /**
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id): Redirector|RedirectResponse|Application
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('view_posts');
    }

    /**
     * @param $id
     * @return Factory|View|Application
     */
    public function edit($id): Factory|View|Application
    {
        $post = Post::find($id);

        return view('adminpanel.edit', compact('post'));
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        Post::destroy($id);

        return redirect()->route('view_posts');
    }

    /**
     * @return Factory|View|Application
     */
    public function user_list(): Factory|View|Application
    {
        $users = User::orderBy('id')->get();

        return view('adminpanel.user_list', compact('users'));
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function block($id): RedirectResponse
    {
        $user = User::find($id);

        $user->blocked = 1;

        $user->save();

        return redirect()->route('user_list');
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function unblock($id): RedirectResponse
    {
        $user = User::find($id);

        $user->blocked = 0;

        $user->save();

        return redirect()->route('user_list');
    }
}
