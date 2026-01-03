@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-5 text-center header-green">タスク登録</h2>

        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                {{-- バリデーションエラー部分テンプレート --}}
                @include('layouts.errors')

                {{form::open(['url' => route('todo.store')])}}
                    <div class="mb-3">
                        {{ form::text('title','', ['class' => 'form-control form-control-lg', 'placeholder' => '例）再配達を頼む']) }}
                    </div>
                    <div class="text-center">
                        {{ form::submit('登録する', ['class' => 'btn btn-green px-4']) }}
                    </div>
                {{form::close()}}
            </div>
        </div>
    </div>
@endsection
