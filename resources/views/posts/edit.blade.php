@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <div class="col-12">
        <div class="card mt-5">

            <div class="card-body">
                <h5 class="card-title">Editar post</h5>

                <form action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                        <div class="form-group">
                            <label for="title_en">Titulo (EN)</label>
                            <input type="text" class="form-control" name="title_en" id="title_en" value="{{ $post->title_en}}"
                                placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="body_en">Contenido (EN)</label>
                            <textarea class="form-control" name="body_en" id="body_en">{{ $post->body_en}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="title_es">Titulo (ES)</label>
                            <input type="text" class="form-control" name="title_es" id="title_es" value="{{ $post->title_es}}"
                                placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="body_es">Contenido (ES)</label>
                            <textarea class="form-control" name="body_es" id="body_es">{{ $post->body_es}}</textarea>
                        </div>



                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>

            </div>

        </div>
    </div>

@endsection
