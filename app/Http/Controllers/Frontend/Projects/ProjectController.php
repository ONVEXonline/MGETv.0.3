<?php

namespace App\Http\Controllers\Frontend\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //My function
    private function faces($type)
    {
        $url = ( $type == 'small') ? 'https://randomuser.me/api/portraits/thumb/' : 'https://randomuser.me/api/portraits/';

        $faces = array();
        for ($i = 1; $i <= 50; $i++) {
            $rnd = rand(0, 99);
            $who = ($rnd >= 50) ? 'women' : 'men';
            $urlToFace = $url . $who . '/' . $rnd . '.jpg';
            $faces[] = $urlToFace;
        }

        return $faces;
    }
    //My function
    private function breadcrumbs()
    {
        $breadcrumbs = array();

        $breadcrumbs = array(
            array(
                'url' => route('projects'),
                'title' => 'Проекты'
            )
        );

        return $breadcrumbs;
    }
    //
    public function index(Request $request)
    {
        $projectsCount = Project::count();
        $projects = Project::simplePaginate(5);

        //
        $facesSmall = $this->faces('small');
        $facesBig = $this->faces('big');

        $data_view = array(
            'title' => 'MGET :: Проекты',
            'description' => '',
            'projects' => $projects,
            'projectsCount' => $projectsCount,
            'facesSmall' => $facesSmall,
            'facesBig' => $facesBig,
            'breadcrumbs' => $this->breadcrumbs()
        );

        return view('frontend.projects.layout', $data_view);
    }
}
