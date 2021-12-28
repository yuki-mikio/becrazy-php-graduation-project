@extends('adminlte::page')

@section('title', 'カテゴリ･タグ追加')

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
    <div class="card card-white">
        <div class="card-header">
            <h1 class="card-title">カテゴリ･タグ追加フォーム</h1>
        </div>
        <div class="card-body">
            <form method="POST">
            @csrf
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" class="form-control rounded-0" style="width: 200px;" required ></dd>
            </dl>
            <dl>
                <dt>タイプ</dt>
                <input type="radio" name="type" value="category">カテゴリ
                <input type="radio" name="type" value="tag" checked="checked">タグ
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" class="form-control rounded-0" style="width: 200px;" maxlength="200" required ></dd>
            </dl>
            <dl>
                <dt>説明(任意)</dt>
                <dd><input type="text" name="description" class="form-control rounded-0" style="width: 200px;" ></dd>
            </dl>
            <button type="button submit" class="btn btn-default btn-lg">保存</button>
            </form>
        </div>
    </div>
@stop