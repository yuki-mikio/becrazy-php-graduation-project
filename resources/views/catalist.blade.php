@extends('adminlte::page')

@section('title', '該当記事一覧')

@section('content_header')
    <h1>{{$cata->name}}の記事</h1>
@stop

@section('content')
    <div class="row">
        @foreach ($cata->posts as $list)
        <div class="col-sm-3 mt-3"><a href="/check?id={{$list->id}}">
            <div class="position-relative p-3 bg-gray" style="height: 180px">
                {{ $list->title }}<br/>
                <small>作成日{{ $list->created_at }}</small>
            </div>
        </div></a>
        @endforeach
    </div>
@stop