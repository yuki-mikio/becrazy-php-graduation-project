@extends('adminlte::page')

@section('title', '記事追加')

@section('content_header')
    <h1>カテゴリ･タグ追加フォーム</h1>
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
    <div class="card card-primary">
        <div class="card-header">
            <h1 class="card-title">記事追加フォーム</h1>
        </div>
        <div class="card-body">
            <form method="POST">
            @csrf
                <dl>
                    <dt>タイトル</dt>
                    <dd><input type="text" class="form-control" style="width: 40%;" name="title" required></dd>
                </dl>
                <dl>
                    <dt>本文</dt>
                    <dd><textarea class="form-control" style="width: 50%;" rows="3" name="content" required/></textarea></dd>
                </dl>
                <label>ステータス</label>
                <div class="form-group">
                    <input type="radio" name="status" value="publish" checked="checked">公開
                    <input type="radio" name="status" value="draft">下書き
                </div>
                <dl>
                    <dt>スラッグ</dt>
                    <dd><input type="text" class="form-control" style="width: 30%;" name="slug" required ></dd>
                </dl>
                <label>カテゴリー</label>
                <div class="form-group">
                    @foreach ($categories as $category)
                    <input type="radio" name="category_id" value="{{ $category->id}}">{{$category->name}}
                    @endforeach
                </div>
                <label>タグ</label>
                <div class="form-group">
                    @foreach ($tags as $tag)
                    <input type="checkbox" name="tag_ids[]" value="{{ $tag->id}}">
                    {{$tag->name}}
                    @endforeach
                </div>
                <button type="button submit" class="btn btn-primary btn-lg">保存</button>
            </form>
        </div>
    </div>
@stop