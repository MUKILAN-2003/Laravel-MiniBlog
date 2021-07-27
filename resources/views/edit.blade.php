@extends('layouts.app')

@section('content')
<div class="addform-center">
      <h2 class="add-heading">Update Blog</h2>
      <form action="/myblog/edit_blog/{{$edit_detail_blog->id}}" method="POST" class="add-form">
      @csrf
        <label class="add-label">Blog Title :</label>
        <input type="hidden" name="name" value="{{$edit_detail_blog->name}}"/>
        <input type="hidden" name="user_mail" value="{{$edit_detail_blog->email}}"/>
        <input
          class="add-input"
          autoComplete="off"
          type="text"
          name="b_title"
          required
          value="{{$edit_detail_blog->title}}"
        />
        <label style="margin-top: 25px;" class="add-label">Blog Body :</label>
        <textarea
          rows="6"
          class="add-input"
          autoComplete="off"
          type="text"
          name="b_body"
          required
        >{{$edit_detail_blog->body}}</textarea>

        <button type="submit">Update Blog</button>
      </form>
    </div>
@endsection