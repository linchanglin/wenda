 @extends('app')
 @section('content')
     <h3>编辑:{!! $wenda->title !!}</h3>
     <hr>
     {!! Form::model($wenda,['method'=>'PATCH','action'=>['WendaController@update',$wenda->id]]) !!}
        @include('wendas.form',['submitButtonText'=>'更新问题'])
     {!! Form::close() !!}
     @include('errors.list')
 @endsection