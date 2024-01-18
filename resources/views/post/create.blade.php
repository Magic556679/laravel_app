@extends('template.master')
@section('main')
<h1>新增文章</h1>
<form action="{{ route('post.store') }}" method="post">
  @csrf
  <label for="title">標題</label>
  <input type="text" name="title">
  <label for="">內容</label>
  <textarea name="content" id="" cols="30" rows="10"></textarea>
  <input type="submit" value="提交文章">
</form>
@endsection