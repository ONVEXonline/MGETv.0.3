@extends('layouts.app')

@section('content')

@include('def.breadcrumb')

<div class="row">
    <div class="col-md-3">
        @include('frontend.activities.activities_search_vertically')
        @include('frontend.activities.activities_stats')
    </div>

    <div class="col-md-9">
        @include('frontend.activities.activities_list')
    </div>
</div>
@endsection