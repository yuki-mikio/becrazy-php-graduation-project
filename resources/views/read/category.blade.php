@extends('adminlte::page')

@section('title')
    {{ $category->name }}
@stop

@section('content_header')
        <h1>{{$category->name}}の記事</h1>
@stop

@section('content')
    <div class="row">
        @foreach ($lists as $list)
        <div class="col-sm-4 mt-5">
            <a href="/read/{{$list->slug}}">
                <div class="position-relative p-4 bg-teal" style=" height: 200px">
                    {{ $list->title }}
                </div>
            </a>
        </div>
        @endforeach
    </div>
@stop