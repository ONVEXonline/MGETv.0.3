<?php

namespace App\Http\Controllers\Frontend\Activities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Comment;
use App\Models\Timeline;

class ActivityController extends Controller
{
    //My function
    private function breadcrumbs()
    {
        $breadcrumbs = array();

        $breadcrumbs = array(
            array(
                'url' => '/activities',
                'title' => 'Новости'
            )
        );

        return $breadcrumbs;
    }
    //
    public function index(Request $request)
    {
        //$activities = Project::paginate(5);
        $activities = Comment::simplePaginate(5);

        //
        $faces = array();
        for ($i = 1; $i <= 50; $i++) {
            $rnd = rand(0, 99);
            $who = ($rnd >= 50) ? 'women' : 'men';
            $urlToFace = 'https://randomuser.me/api/portraits/thumb/' . $who . '/' . $rnd . '.jpg';
            $faces[] = $urlToFace;
        }
        //

        $data_view = array(
            'title' => 'MGET :: Новости',
            'description' => 'Новости',
            'activities' => $activities,
            'faces' => $faces,
            'breadcrumbs' => $this->breadcrumbs()
        );
        return view('frontend.activities.layout', $data_view);
    }
}
