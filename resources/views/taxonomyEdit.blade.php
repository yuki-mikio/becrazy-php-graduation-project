@extends('adminlte::page')

@section('title', 'カテゴリ･タグ編集')

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
            <h1 class="card-title">カテゴリ･タグ編集フォーム</h1>
        </div>
        <div class="card-body">
            <form method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $edit->id }}">
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" class="form-control rounded-0" style="width: 200px;" required value="{{ $edit->name }}"></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" class="form-control rounded-0" style="width: 200px;" maxlength="200" required value="{{ $edit->slug }}"></dd>
            </dl>
            <dl>
                <dt>説明(任意)</dt>
                <dd><input type="text" name="description" class="form-control rounded-0" style="width: 200px;" value="{{ $edit->description }}"></dd>
            </dl>
            <button type="button submit" class="btn btn-default btn-lg">更新</button>
            </form>
        </div>
    </div>
@stop