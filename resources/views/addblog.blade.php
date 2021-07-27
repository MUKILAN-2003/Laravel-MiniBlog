@extends('layouts.app')

@section('content')
<div class="addform-center">
      <h2 class="add-heading">Add New Blog</h2>
      <form action="/addmyblog" method="POST" class="add-form">
      @csrf
        <label class="add-label">Blog Title :</label>
        <input
          class="add-input"
          autoComplete="off"
          type="text"
          name="b_title"
          required
        />
        <label style="margin-top: 25px;" class="add-label">Blog Body :</label>
        <textarea
          rows="6"
          class="add-input"
          autoComplete="off"
          type="text"
          name="b_body"
          required
          value={b_body}
        ></textarea>
        <input
          class="add-input"
          autoComplete="off"
          type="hidden"
          name="name"
          required
          value="{{ Auth::user()->name }}"
        />
        <input
          class="add-input"
          autoComplete="off"
          type="hidden"
          name="user_mail"
          required
          value="{{ Auth::user()->email }}"
        />
        <button type="submit">Add Blog</button>
      </form>
    </div>
@endsection