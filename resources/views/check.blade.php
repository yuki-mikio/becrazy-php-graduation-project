@extends('adminlte::page')

@section('title', '記事')

@section('content_header')
    <h1>プレビュー</h1>
@stop

@section('content')
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $check->title }}</h3>
        </div>
        <div class="card-body">
            {{ $check->content }}
        </div>
        <div class="card-footer">
            <label>カテゴリー</label>
            <div>
                @foreach ($category as $category)
                <a href="http://localhost:8000/catalist?id={{$category->id}}">
                    {{ $category->name }}
                </a>
                @endforeach
            </div>
            <label>タグ</label>
            <div>
                @foreach ($tags as $tag)
                <a href="http://localhost:8000/catalist?id={{$tag->id}}">
                    {{ $tag->name }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
        <form method="GET" action="edit">
            <input type="hidden" name="id" value="{{ $check->id }}">
            <button type="button submit" class="btn btn-success btn-lg">記事編集
            </button>
        </form><br/>
        <form method="POST" action="delete">
            @csrf
            <input type="hidden" name="id" value="{{ $check->id }}">
            <button type="button submit" class="btn btn-danger btn-lg">記事削除
            </button>
        </form>
 @stop