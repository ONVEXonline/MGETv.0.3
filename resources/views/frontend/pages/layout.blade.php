@extends('layouts.app')

@section('content')

@include('def.breadcrumb')

<div class="row">
    <div class="col-md-3">
        @include('frontend.pages.pages_sidebar_menu')
        @if($pageInfo->slug == 'casto-zadavaemye-voprosy')
        @include('frontend.pages.page_utp1')
        @endif
    </div>

    <div class="col-md-9">
        @if($pageInfo->slug == 'kak-eto-rabotaet')
        @include('frontend.pages.page_kak_eto_rabotaet')
        @elseif($pageInfo->slug == 'casto-zadavaemye-voprosy')
        @include('frontend.pages.page_casto_zadavaemye_voprosy')
        @elseif($pageInfo->slug == 'akcioneram')
        @include('frontend.pages.page_akcioneram')
        @else
        @include('frontend.pages.pages_info')
        @endif
    </div>
</div>
@endsection