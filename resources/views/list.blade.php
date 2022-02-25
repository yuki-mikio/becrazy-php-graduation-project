@extends('adminlte::page')

@section('title', '記事管理')

@section('content_header')
    <h1>記事一覧</h1>
@stop

@section('content')
    <div class="row">
        @foreach ($lists as $list)
        <div class="col-sm-3 mt-3"><a href="/check?id={{$list->id}}">
            <div class="position-relative p-3 bg-gray" style="height: 180px">   
                {{ $list->title }}<br/>
                <small>作成日{{ $list->created_at }}</small>
            </div>
        </div></a>           
        @endforeach
    </div>
@stop      