@extends('layouts.app')

@section('content')
<div>
    <div class="blog-details">
        <article>
          <h2>{{$detail_blog->title}}</h2>
          <p>Written By : {{$detail_blog->name}}&nbsp;&nbsp;&nbsp;({{$detail_blog->email}})</p>
          <p>Created At: {{$detail_blog->created_at}}</p>
          <p id="blog_body_detail">{{$detail_blog->body}}</p>
          <a href="/"><-back</a>
        </article>
    </div>    
</div>
@endsection