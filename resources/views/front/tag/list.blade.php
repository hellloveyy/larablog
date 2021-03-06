@extends('layouts.blog')
@section('promo')
<section class="breadcrumbs-v5">
    <div class="container">
        <h2 class="breadcrumbs-v5-title">I am hellloveyy</h2>
        <span class="breadcrumbs-v5-subtitle">I am a slow walker, but I never walk backwards...</span>
    </div>
</section>
<section class="breadcrumbs-v1">
    <div class="container">
        <h2 class="breadcrumbs-v1-title">{{$tag->name}}</h2>
        <ol class="breadcrumbs-v1-links">
            <li><a href="http://blog.iwanli.me">Home</a></li>
            <li class="active">{{$tag->name}}</li>
        </ol>
    </div>
</section>
@endsection
@section('content')
@inject('presenter', 'App\Presenters\Front\BlogPresenter')
{!! $presenter->articleList($articles) !!}
@endsection

@section('paginate')
{!! $articles->fragment('pageScroll')->links('pagination::iwanli') !!}
@endsection