@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">管理者一覧</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($users as $user)
                        <dl>
                            <dt>
                                {{ $user->name}}
                            </dt>
                            <dd>
                                {{ $user->created_at }}
                            </dd>
                        </dl>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
