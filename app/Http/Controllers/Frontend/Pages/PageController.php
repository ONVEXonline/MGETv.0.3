<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageCategory;

class PageController extends Controller
{
    private function breadcrumbs($request)
    {
        $breadcrumbs = array();

        $pageCategoryId = PageCategory::where('slug', $request->segment(1))->firstOrFail();
        $pageSlug = $request->segment(2) ? $request->segment(2) : Page::where('page_category_id', $pageCategoryId->id)->firstOrFail()->slug;


        $pageInfo = Page::where('slug', $pageSlug)->firstOrFail();

        $pageName = $pageInfo->title;
        $pageCategoryName = $pageInfo->pageCategory->name;
        $pageCategoryUrl = $pageInfo->pageCategory->slug;

        // $breadcrumbs = array(
        //     array(
        //         'url' => url($pageCategoryUrl),
        //         'title' => $pageCategoryName
        //     ),
        //     array(
        //         'url' => '',
        //         'title' => $pageName
        //     )
        // );
        $breadcrumbs = array(
            array(
                'url' => array(
                    array(
                        'url' => url($pageCategoryUrl),
                        'title' => $pageCategoryName
                    ),
                    array(
                        'url' => url('general-info'),
                        'title' => 'Общая информация'
                    ),
                    array(
                        'url' => url('site-info'),
                        'title' => 'Информация о сайте'
                    ),
                    array(
                        'url' => url('company-info'),
                        'title' => 'Информация о компании'
                    ),
                ),
                'title' => $pageCategoryName
            ),
            array(
                'url' => '',
                'title' => $pageName
            )
        );

        return $breadcrumbs;
    }

    public function index(Request $request, $slug = 'default')
    {
        $pageCategoryInfo = PageCategory::where('slug', $request->segment(1))->firstOrFail();
        $pageSlug = $request->segment(2) ? $request->segment(2) : Page::where('page_category_id', $pageCategoryInfo->id)->firstOrFail()->slug;

        $pageInfo = Page::where('slug', $pageSlug)->firstOrFail();

        $pageCategoryMenu = Page::where('page_category_id',$pageCategoryInfo->id)->get();

        $data_view = array(
            'title' => $pageCategoryInfo->name.' - '.$pageInfo->title,
            'description' => 'Описание для каталога проектов',
            'breadcrumbs' => $this->breadcrumbs($request),
            'pageInfo' => $pageInfo,
            'pageCategoryMenu' => $pageCategoryMenu,
            'pageCategoryName' => $pageCategoryInfo->name
        );
        return view('frontend.pages.layout', $data_view);
    }
}
