@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="col-12">
        <div class="card mt-5">

            <div class="card-body">
                <h5 class="card-title">Crear nuevo post</h5>

                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf

                    @foreach (config('app.available_locales') as $locale)
                        <div class="form-group">
                            <label for="title_{{ $locale }}">Titulo ({{ strtoupper($locale) }})</label>
                            <input type="text" class="form-control" name="title_{{ $locale }}" id="title_{{ $locale }}" value="{{ old('title_' . $locale) }}"
                                placeholder="Enter title">
                        </div>
                        <div class="form-group">
                            <label for="body_{{ $locale }}">Contenido ({{ strtoupper($locale) }})</label>
                            <textarea class="form-control" name="body_{{ $locale }}" id="body_{{ $locale }}">{{ old('body_' . $locale) }}</textarea>
                        </div>
                    @endforeach


                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>

            </div>

        </div>
    </div>

@endsection
