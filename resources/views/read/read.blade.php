@extends('adminlte::page')

@section('title')
    {{ $read->title }}
@stop

@section('content_header')
    <br/>
@stop

@section('content')
    <div class="card">
        <div class="card-header mt-4">
            <h1 class="card-title" style="font-size: 200%">{{ $read->title }}</h1>
        </div>
        <div class="card-body" style="line-height: 3.5;">
            {!! $read->content !!}
        </div>
        <div class="card-footer">
            <label>カテゴリー</label>
            <div>
                 @foreach ($category as $category)
                <a href="http://localhost:8000/category/{{$category->slug}}">
                    {{ $category->name }}
                </a>
                @endforeach
            </div>
            <label>タグ</label>
            <div>
                @foreach ($tags as $tag)
                <a href="http://localhost:8000/category/{{$tag->slug}}">
                    {{ $tag->name }}
                </a>
                @endforeach
            </div>        
        </div>
    </div>
@stop