@extends('layouts.app')

@section('title', 'Posts')

@section('content')

<header>
    <h1>Posts</h1>
</header>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Slug</th>
            <th scope="col">Data creazione</th>
            <th scope="col">Ultima modifica</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <th scope="row">1</th>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td>
                <div class="d-flex gap-2">
                    <a href="{{route('admin.post.show', $post->id)}}" class="btn btn-sm btn-info">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{route('admin.post.edit', $post)}}" class="btn btn-sm btn-warning">
                        <i class="fas fa-pencil"></i>
                    </a>

                    <form action="{{route('admin.post.destroy', $post)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type='submit' class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">
                <h2 class="text-center">Non ci sono post da visualizzare</h2>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection