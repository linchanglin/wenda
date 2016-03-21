@extends('app')
@section('content')
    <h3>{{ $wenda->title }}</h3>
    <hr>
    <article>
        {{ $wenda->body }}
    </article>

    @unless($wenda->tags->isEmpty())
        <h4>标签:</h4>
        <ul>
            @foreach($wenda->tags as $tag)
                <li>{{ $tag->name }}</li>
            @endforeach
        </ul>
    @endunless
@endsection