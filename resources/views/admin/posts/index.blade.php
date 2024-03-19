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
                <a href="{{route('admin.post.show', $post->id)}}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-eye"></i>
                </a>
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