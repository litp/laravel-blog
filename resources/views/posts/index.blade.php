@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                    @foreach ($posts as $post)
                    	<h3>{{ $post->title }}</h3>
                    	<br>
                        {!! $post->html !!}
                        <br>
                        <a href="{{ url('/posts/edit/' . $post->slug) }}">Edit</a>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection