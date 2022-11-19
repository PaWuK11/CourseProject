<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class CollageController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function history(): View|Factory|Application
    {
        return view('collage.history');
    }

    /**
     * @return Factory|View|Application
     */
    public function admin_staff(): Factory|View|Application
    {
        return view('collage.admin_staff');
    }
    /**
     * @return Factory|View|Application
     */
    public function cyclical_commission(): Factory|View|Application
    {
        return view('collage.cyclical_commission');
    }
    /**
     * @return Factory|View|Application
     */
    public function structural(): Factory|View|Application
    {
        return view('collage.structural');
    }
    /**
     * @return Factory|View|Application
     */
    public function specialties(): Factory|View|Application
    {
        return view('collage.specialties');
    }
    /**
     * @return Factory|View|Application
     */
    public function psychological(): Factory|View|Application
    {
        return view('collage.psychological');
    }
    /**
     * @return Factory|View|Application
     */
    public function licenses(): Factory|View|Application
    {
        return view('collage.licenses');
    }
    /**
     * @return Factory|View|Application
     */
    public function directors_report(): Factory|View|Application
    {
        return view('collage.directors_report');
    }
    /**
     * @return Factory|View|Application
     */
    public function accreditation_materials(): Factory|View|Application
    {
        return view('collage.accreditation_materials');
    }
    /**
     * @return Factory|View|Application
     */
    public function educational_activities(): Factory|View|Application
    {
        return view('collage.educational_activities');
    }

    /**
     * @param $id
     * @return Factory|View|Application
     */
    public function post_show($id): Factory|View|Application
    {
        $posts = Post::find($id);
        return view('post', compact('posts',));
    }


}
