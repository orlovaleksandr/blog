@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="alert alert-primary text-center">Категорий 0</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p class="alert alert-primary text-center">Материалов 0</p>
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
                    <a href="" class="card-body text-secondary">
                        <h4 class="card-title">Категория первая</h4>
                        <p class="card-text">
                            Кол-во материалов
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <a href="#" class="btn btn-block btn-light bg-white card-header">Создать материал</a>

                    <a href="" class="card-body text-secondary">
                        <h4 class="card-title">Материал первый</h4>
                        <p class="card-text">
                            Категория
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
