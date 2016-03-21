@extends('app')
@section('content')
    <h3>添加新问题</h3>
    <hr>
    {!! Form::model($wendas=new \App\Wenda,['url'=>'wendas']) !!}

    @include('wendas.form',['submitButtonText'=>'提交问题'])

    {!! Form::close() !!}
    @include('errors.list')
@endsection