@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1">
            <div>
                <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Crea un Post</a>
            </div>

            <table class="table table-dark table-striped">
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Autho
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Options
                    </th>
                </tr>

                @foreach ($posts as $post)
                <tr>
                    <th>
                        {{ $post->id }}
                    </th>
                    <th>
                        {{ $post->author }}
                    </th>
                    <th>
                        {{ $post->title }}
                    </th>
                    <th>
                        <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">View</a>
                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection