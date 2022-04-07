@extends('layouts.app')

@section('title', 'Index')

@section('content')

<div class="col-12">

    @foreach ($posts as $post)
    <div class="card mt-3">
        <div class="card-body">
          <h5 class="card-title">{{ $post->{'title_'.app()->getLocale()} }}</h5>
          <p class="card-text">{{ substr($post->{'body_'.app()->getLocale()}, 0, 80) }}</p>
          <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
              @method('DELETE')
              @csrf
          <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Editar</a>
          <button type="submit" class="btn btn-danger">Borrar</button>
          </form>
        </div>
      </div>
    @endforeach
</div>

@endsection
