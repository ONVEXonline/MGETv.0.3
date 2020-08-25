@extends('layouts.app')

@section('content')

@include('def.breadcrumb')

<div class="row">
    <div class="col-md-3">
        @include('frontend.projects.projects_search_vertically')
        @include('frontend.projects.projects_utp1')
        @include('frontend.projects.projects_categories')
        @include('frontend.projects.projects_stats')
    </div>

    <div class="col-md-9">
        @include('frontend.projects.projects_list')
    </div>
</div>
@endsection