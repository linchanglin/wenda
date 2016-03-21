@extends('app')
@section('content')

    @include('partials.indexNav')
    <hr>

    @foreach($wendas as $wenda)
        <article>
            <h3>
                <a href="/wendas/{{$wenda->id}}">{{ $wenda->title }}</a>
            </h3>
        </article>
        <hr>
    @endforeach

@endsection