@extends('layouts.app')

@section('title', 'Crea post')

@section('content')
<header>
    <h1>Nuovo Post</h1>
</header>

<form action="{{route('admin.post.store')}}" method="POST">
    @csrf

    <hr>
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{route('admin.post.index')}}" class="btn btn-sm btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Torna alla lista
        </a>
        <div class="d-flex align-items-center gap-2">
            <button type="reset" class="btn btn-sm btn-warning">
                <i class="fas fa-eraser me-2"></i>Svuota i campi
            </button>
            <button type="submit" class="btn btn-sm btn-success">
                <i class="fas fa-floppy-disk me-2"></i>Salva
            </button>
        </div>
    </div>
</form>
@endsection