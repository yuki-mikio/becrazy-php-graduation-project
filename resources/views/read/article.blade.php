@extends('adminlte::page')

@section('title' , '記事一覧')

@section('content_header')

@stop

@section('content')
    <div class="row">
        @foreach ($lists as $list)
        <div class="col-sm-4 mt-5">
            <a href="http://localhost:8000/read/{{$list->slug}}">
                <div class="position-relative p-4 bg-teal" style="height: 200px">
                    {{ $list->title }}<br/>
                    <small>公開日{{ $list->created_at }}</small>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@stop