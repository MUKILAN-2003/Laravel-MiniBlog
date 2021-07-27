@extends('layouts.app')

@section('content')
<div>
    @foreach($blogs as $blog)
    <a class="home_a_blog" href="blog_detail/{{$blog->id}}">
    <div class="blog-list">
        <h3>{{$blog->title}}</h3>
        <h6>Written By : {{$blog->name}}</h6>
    </div>
    </a>
    @endforeach
</div>
@endsection