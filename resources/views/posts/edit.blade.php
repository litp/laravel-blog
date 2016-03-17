@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

                <div class="panel-body">
                    <form method="POST">
                        <input type="text" name="title" value="{{ $post->title }}">
                        <input type="text" name="slug" value="{{ $post->slug }}">
                        <input type="text" name="category">
                        <input type="text" name="tag">
                        <input type="text" name="html" value="{{ $post->html }}">
                        <input type="text" name="markdown" value="{{ $post->markdown }}">
                        <input type="submit" value="Save Post">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection