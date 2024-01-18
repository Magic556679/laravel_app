@extends('template.master')
@section('main')
<h1>文章列表</h1>
@foreach($posts as $postItem)
  <div>
    <h2>{{ $postItem->title }}</h2>
    <p>{{ $postItem->content }}</p>
    <p>最後更新時間：{{ $postItem->updated_at }}</p>
  </div>
  <form action="{{ route('post.delete', ['id' => $postItem->id]) }}" method="post">
    @csrf
    <input type="submit" value="刪除">
  </form>
@endforeach
@endsection