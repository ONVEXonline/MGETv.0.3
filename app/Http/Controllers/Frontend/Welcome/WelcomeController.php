<?php

namespace App\Http\Controllers\Frontend\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

use Illuminate\Support\Facades\Config;

class WelcomeController extends Controller
{

    public function index(Request $request)
    {
        //
        $faces = array();
        for ($i = 1; $i <= 50; $i++) {
            $rnd = rand(0, 99);
            $who = ($rnd >= 50) ? 'women' : 'men';
            $urlToFace = 'https://randomuser.me/api/portraits/thumb/' . $who . '/' . $rnd . '.jpg';
            $faces[] = $urlToFace;
        }
        //
        $projects = Project::take(5)->get();

        $data_view = array(
            'title' => 'Ваша идея достойна инвестиций',
            'description' => 'Каждый автор получает требуемые ресурсы для развития собственного проекта',
            'projects' => $projects,
            'faces' => $faces
        );

        return view('frontend.welcome.layout', $data_view);
    }
}
