@extends('adminlte::page')

@section('title' , 'トップ')

@section('content_header')
<div style="text-align: center">
</div>
@stop

@section('content')
    <div class="row">
        @foreach ($lists as $list)
        <div class="col-sm-4 mt-5">
            <a href="/read/{{$list->slug}}">
                <div class="position-relative p-4 bg-teal" style="height: 200px">
                    {{ $list->title }}
                </div>
            </a>
        </div>
        @endforeach
    </div>
@stop