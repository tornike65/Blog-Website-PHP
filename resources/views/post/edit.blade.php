@extends('layout')
@section('content')
<div class="comment-form-wrap pt-5">
    <h3 class="mb-5 text-center">Update A Post</h3>
    <form method="POST" action="/post/{{$post->slug}}" class="p-5 bg-light">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" value="{{$post->title}}" id="title" name="title">
            @error('title')
            <span class="text-danger">{{$errors->first('title')}} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="Category">Category *</label>
            <select name="category_id" id="category_id">
                <option selected>Select</option>
                <option name="category_id" value="{{$post->category->id}}">{{$post->category->title}}</option>
            </select>
            @error('category_id')
            <span class="text-danger">{{$errors->first('category_id')}} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="15" class="form-control">{{$post->body}}</textarea>
            @error('body')
            <span class="text-danger">{{$errors->first('body')}} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @error('image')
            <span class="text-danger">{{$errors->first('image')}} </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" class="btn-lg btn-block btn-success" value="Update Post" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection