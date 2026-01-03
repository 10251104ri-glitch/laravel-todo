@extends ('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-5 text-center header-green">タスク編集</h2>

        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                {{-- バリデーションエラー部分テンプレート --}}
                @include('layouts.errors')

                {{ form::open(['url' => route('todo.update', $todo->id), 'method' => 'put']) }}
                <div class="my-3">
                    {{ form::label('title', 'Title') }}
                    {{ form::text('title', $todo->title, ['class' => 'form-control', 'placeholder' => '牛乳を買う']) }}
                </div>
                <div>
                    {{ form::submit('更新する', ['class' => 'btn btn-green px-4']) }}
                </div>
                {{ form::close() }}


                {{ form::open(['url' => route('todo.destroy', $todo->id), 'class' => 'mt-3', 'method' => 'delete']) }}
                {{ form::submit('削除する', ['class' => 'btn btn-blue px-4']) }}
                {{ form::close() }}
            </div>
        </div>
    </div>
@endsection
