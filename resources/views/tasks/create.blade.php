@extends('layouts.app')

@section('content')

    <h1>タスク新規登録ページ</h1>

    @include('commons.error_messages')

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}


<!-- ここにページ毎のコンテンツを書く -->

@endsection