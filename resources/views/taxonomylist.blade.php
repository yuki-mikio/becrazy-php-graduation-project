@extends('adminlte::page')

@section('title')
    @if($title === 'category')
        カテゴリ一覧
    @else
        タグ一覧
    @endif
@stop

@section('content_header')
    @if($title === 'category')
        <h1>カテゴリ一覧</h1>
    @else
        <h1>タグ一覧</h1>
    @endif
@stop

@section('content')
    <div class="row">
        @foreach ($lists as $list)
        <div class="col-md-3 col-sm-6 col-10">
            <a href="http://localhost:8000/catalist?id={{$list->id}}">
                <div class="info-box bg-info">
                    <h4>{{ $list->name }}</h4>
                    <div class="info-box-content">
                        <div align="right" card-tools>
                            <form action="taxonomyEdit" method="GET">
                                <button type="submit" class="btn btn-tool" name="id" value="{{ $list->id }}">
                                    <i class="fas fa-wrench fa-2x"></i>
                                </button>
                            </form>
                            <form method="POST" action="taxonomydel">
                            @csrf 
                                <button type="submit" name="id" value="{{ $list->id }}" class="btn btn-tool">
                                    <i class="fas fa-trash-alt fa-2x"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                
                </div>
            </a>
        </div>
        @endforeach
    </div>
@stop