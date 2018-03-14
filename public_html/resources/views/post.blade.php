@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="post-full">
            <div class="blog-meta">
                <h2>{{$post->title}}</h2>
            </div><!--post meta end-->
            <div class="post-thumbnail">
                <img src="{{ Voyager::image( $post->image ) }}" class="img-fluid">
            </div>
            <div class="post-content">
                {!! $post->body !!}
            </div>
        </div>
    </div>
    <script src="js/google-map.js"></script>
@endsection
