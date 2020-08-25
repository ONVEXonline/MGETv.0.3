@extends('layouts.app')

@section('title', __('Not Found'))
@section('content')
<div class="text-center my-5">&nbsp;</div>
<div class="h2 text-center font-weight-bold">&#128533; @lang('messages.error_404_title')</div>
<div class="lead text-dark text-center pt-3 px-5 font-weight-normal">
    @lang('messages.error_404_text', ['url' => '<br><span class="font-weight-bold">'.Request::url().'</span><br>'])
</div>
<div class="text-center my-5">&nbsp;</div>
@endsection