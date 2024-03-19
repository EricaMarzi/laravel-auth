@extends('layouts.app')

@section('title', 'Post')

@section('content')

<header>
    <h1>{{$post->title}}</h1>
</header>


<div class="clearfix">
    @if($post->image)
    <img src="{{$post->image}}" alt="$post->title" class="float-start me-2">
    @endif
    <p>{{$post->content}}</p>
    <div>
        <strong>Data di creazione:</strong> {{$post->created_at}}
        <strong>Ultima modifica:</strong> {{$post->updated_at}}
    </div>
</div>
<hr>
<footer class="d-flex justify-content-between align-items-center mt-5">
    <a href="{{route('admin.post.index')}}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="d-flex gap-2">
        <a href="{{route('admin.post.edit', $post)}}" class="btn btn-sm btn-warning">
            <i class="fas fa-pencil me-2"></i>Modifica
        </a>

        <form action="{{route('admin.post.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type='submit' class="btn btn-sm btn-danger">
                <i class="fas fa-trash me-2"></i>Elimina
            </button>
        </form>
    </div>
</footer>

@endsection