@extends('layouts.app')

@section('content')
<div class="card text-center">
    <div class="card-header">
      {{ $post->title }}
    </div>
    <div class="card-body">
        <img src="{{ $post->img }}" alt="">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->content }}</p>
      <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
      {{-- <a href="{{ route('admin.posts.destroy') }}" class="btn btn-danger">Cancel</a> --}}
    </div>
    <div class="card-footer text-muted">
      {{ $post->date }}
    </div>
  </div>
@endsection