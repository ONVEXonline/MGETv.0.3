@extends('layouts.app')

@section('content')

@include('def.breadcrumb')

<div class="row">
    <div class="col-md-3">
        @include('frontend.project.project_menu')
    </div>

    <div class="col-md-9">
        @if($curMenu == 'description')
        @include('frontend.project.project_description')
        @endif

        @if($curMenu == 'activities')
        @include('frontend.project.project_activities')
        @endif

        @if($curMenu == 'discussion')
        @include('frontend.project.project_discussion')
        @endif

        @if($curMenu == 'author')
        @include('frontend.project.project_author')
        @endif

        @if($curMenu == 'team')
        @include('frontend.project.project_team')
        @endif
    </div>
</div>
@endsection