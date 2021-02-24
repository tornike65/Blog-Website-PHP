@extends('layouts.app')
@section('content')
<div class="comment-form-wrap pt-5">

    <h3 class="mb-5 text-center">Create A Post</h3>
    <form action="/post" method="POST" class="p-5 bg-light">
        @csrf
        <div class="form-group">
            <label for="title">Title *</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')
            <span class="text-danger">{{$errors->first('title')}} </span>

            @enderror
        </div>
        <div class="form-group">
            <label for="Category">Category *</label>
            <select name="category_id" id="category_id">
                <option selected hidden>Select Category</option>
                <option name="category_id" value="1">Book</option>
                <option name="category_id" value="2">Travel</option>
                <option name="category_id" value="3">Adventure</option>
                <option name="category_id" value="4">Lifestyle</option>
                <option name="category_id" value="5">Business</option>
            </select>
            @error('category_id')
            <span class="text-danger">{{$errors->first('category_id')}} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" rows="15" class="form-control"></textarea>
            @error('body')
            <span class="text-danger">{{$errors->first('body')}} </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image *</label>
            <input type="text" class="form-control" id="image" name="image">
            @error('image')
            <span class="text-danger">{{$errors->first('image')}} </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" value="Create Post" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection