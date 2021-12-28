@extends('adminlte::page')

@section('title' , 'トップ')

@section('content_header')
    <h1></h1>
@stop

@section('content')
    <div class="row">
        @foreach ($lists as $list)
        <div class="col-sm-4 mt-5">
            <a href="http://localhost:8000/read/{{$list->slug}}">
                <div class="position-relative p-4 bg-teal" style="height: 200px">
                    {{ $list->title }}
                </div>
            </a>
        </div>
        @endforeach
    </div>
@stop