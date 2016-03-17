@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

                <div class="panel-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" value="{{ $post->slug }}" class="form-control">
                        </div>
                            
                            <input type="text" name="category">
                            
                            <input type="text" name="tag">

                        <div class="form-group">
                            <label for="html">HTML Content</label>
                            <textarea name="html" id="html" class="form-control" rows="5">{{ $post->html }}</textarea>
                        </div>
                            
                        <div class="form-group">
                            <label for="markdown">Markdown Content</label>
                            <textarea type="text" name="markdown" id="markdown" class="form-control" rows="5">{{ $post->markdown }}</textarea>
                        </div>

                            <button type="submit" class="btn btn-primary">Save Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection