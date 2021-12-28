@extends('adminlte::page')

@section('title', '記事編集')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card card-success">
        <div class="card-header">
            <h1 class="card-title">記事編集フォーム</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="edited">
            @csrf
            <input type="hidden" name="id" value="{{ $edit->id }}">
            <label>タイトル</label>
            <div class="form-group">
                <input type="text" class="form-control" style="width: 40%;" name="title" required value="{{ $edit->title }}">
            </div>
            <label>本文</label>
            <div class="form-group">
                <textarea name="content" class="form-control" style="width: 50%;" rows="3" required>{{ $edit->content }}</textarea>
            </div>
            <label>ステータス</label>
            <div class="form-group">
                <input type="radio" name="status" value="publish" checked="checked">公開
                <input type="radio" name="status" value="draft">下書き
            </div>
            <label>スラッグ</label>
            <div class="form-group">
                <input type="text" class="form-control" style="width: 30%;" name="slug" required value="{{ $edit->slug }}">
            </div>
            <label>カテゴリー</label>
            <div class="form-group">
                @foreach ($categories as $category)
                <input type="radio" name="category_id" value="{{ $category->id}}">{{$category->name}}
                @endforeach
            </div>
            <label>タグ</label>
            <div class="form-group">
                @foreach ($tags as $tag)
                <input type="checkbox" name="tag_ids[]" value="{{ $tag->id}}">{{$tag->name}}
                @endforeach
            </div>
            <button type="button submit" class="btn btn-success btn-lg">更新</button>
            </form>
        </div>
    </div>
@stop