@extends('layouts.app')

@section('content')
<div>
    @foreach($myblogs as $blog)
    <a class="home_a_blog" href="/blog_detail/{{$blog->id}}">
    <div class="blog-list">
        <h3>{{$blog->title}}</h3>
        <h6>Written By : {{$blog->name}}</h6>
        <div class="myblog_options">
        <a style="color: red;margin-right: 20px;" href="delete_blog/{{$blog->id}}">Delete Blog</a>
        <a style="color: blue;margin-left: 20px;" href="edit_blog/{{$blog->id}}">Edit Blog</a>
        </div>
        
    </div>
    </a>
    @endforeach
</div>
@endsection