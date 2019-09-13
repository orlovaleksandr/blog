@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="alert alert-primary text-center">Категорий {{$count_categorise}}</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="alert alert-primary text-center">Материалов {{$count_articles}}</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="alert alert-primary text-center">Посетителей 0</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="alert alert-primary text-center">Сегодня 0</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <a href="{{route('admin.category.create')}}" class="btn btn-block btn-light bg-white card-header">Создать категорию</a>
                    @foreach ($categories as $category)
                        <a href="{{route('admin.category.edit', $category)}}" class="card-body border-bottom text-secondary">
                            <h4 class="card-title">{{$category->title}}</h4>
                            <p class="card-text">
                                {{$category->articles()->count()}}
                            </p>
                        </a>
                    @endforeach

                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <a href="#" class="btn btn-block btn-light bg-white card-header">Создать материал</a>
                    @foreach ($articles as $article)
                        <a href="{{route('admin.article.edit', [$article])}}" class="card-body border-bottom text-secondary">
                            <h4 class="card-title">{{$article->title}}</h4>
                            <p class="card-text">
                                {{$article->categories()->pluck('title')->implode(', ')}}
{{--                                {{$article->categories()->count()}}--}}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
