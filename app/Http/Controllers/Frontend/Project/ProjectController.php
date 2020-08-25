<?php

namespace App\Http\Controllers\Frontend\Project;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Timeline;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    //
    private function makeCommentsTree($commentsInfo, $parent_id, $commentsTree)
    {
        //dd($commentsInfo);
        foreach ($commentsInfo as $comment) {
            echo $parent_id.'-1<br>';
            if ($comment->parent_id == $parent_id) {
                echo $parent_id.'-2<br>';
                $commentsTree[$parent_id] = $comment;
                $this->makeCommentsTree($commentsInfo, $comment->id, $commentsTree);
            }
        }
        return $commentsTree;
    }
    //
    private function commentsTree($commentsInfo)
    {
        $commentsTree = $commentsInfo;
        //dd($commentsInfo);
        foreach ($commentsTree as $comment) {
            if ($comment->parent_id === 0) {
                $commentsTree[$comment->id] = $this->makeCommentsTree($commentsInfo, $comment->id, array());
            }
        }
        // print_r($commentsTree);
        return $commentsTree;
    }
    //
    private function faces($type)
    {
        $url = ($type == 'small') ? 'https://randomuser.me/api/portraits/thumb/' : 'https://randomuser.me/api/portraits/';

        $faces = array();
        for ($i = 1; $i <= 50; $i++) {
            $rnd = rand(0, 99);
            $who = ($rnd >= 50) ? 'women' : 'men';
            $urlToFace = $url . $who . '/' . $rnd . '.jpg';
            $faces[] = $urlToFace;
        }

        return $faces;
    }
    //
    private function breadcrumbs($projectInfo, $curMenu)
    {
        $breadcrumbs = array(
            array(
                'url' => route('projects'),
                'title' => 'Проекты'
            ),
            array(
                'url' => '',
                'title' => $this->breadcrumbsHint($curMenu) . ' - ' . Str::limit($projectInfo->name, 45)
            )
        );

        return $breadcrumbs;
    }
    //
    private function breadcrumbsHint($curMenu)
    {
        $hint = 'Информация по проекту';
        switch ($curMenu) {
            case 'description':
                $hint = 'Информация по проекту';
                break;
            case 'activities':
                $hint = 'Активности по проекту';
                break;
            case 'discussion':
                $hint = 'Обсуждение проекта';
                break;
            case 'author':
                $hint = 'Автор проекта';
                break;
            case 'team':
                $hint = 'Команда проекта';
                break;
        }
        return $hint;
    }
    //
    public function index(Request $request, $projectId)
    {
        $projectInfo = Project::where('id', $projectId)->firstOrFail();

        $commentsInfo = Comment::where('project_id', $projectId)->simplePaginate(5);
        $commentsCount = Comment::where('project_id', $projectId)->count();

        $projectActivities = Timeline::where('project_id', $projectId)->simplePaginate(5);
        $projectActivitiesCount = Timeline::where('project_id', $projectId)->count();

        $projectsByCurUser = Project::where('user_id', $projectInfo->user->id)->simplePaginate(5);

        $curMenu = $request->segment(3) ? $request->segment(3) : 'description';
        //

        $facesSmall = $this->faces('small');
        $facesBig = $this->faces('big');

        $data_view = array(
            'title' => $this->breadcrumbsHint($curMenu) . ' - ' . Str::limit($projectInfo->name, 50),
            'description' => Str::limit($projectInfo->description, 100),
            'projectInfo' => $projectInfo,
            'commentsInfo' => $commentsInfo,
            'commentsCount' => $commentsCount,
            'projectActivities' => $projectActivities,
            'projectActivitiesCount' => $projectActivitiesCount,
            'projectsByCurUser' => $projectsByCurUser,
            'curMenu' => $curMenu,
            'facesSmall' => $facesSmall,
            'facesBig' => $facesBig,
            'breadcrumbs' => $this->breadcrumbs($projectInfo, $curMenu)
        );
        return view('frontend.project.layout', $data_view);
    }
}
