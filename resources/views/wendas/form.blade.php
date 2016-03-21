<div class="form-group">
    {!! Form::label('title','标题:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','内容:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('tag_list','标签:') !!}
    {!! Form::select('tag_list[]',$tags,null,['id'=>'tag_list','class'=>'form-control','multiple']) !!}
</div>



<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>



@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder:'选择标签',
            tags:true,
        });
    </script>

@endsection