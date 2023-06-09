@extends('layouts.admin')

@section('content')
<div class="container my-4">
    @include('layouts.includes.confirmMessage')
    <h2 class="m-3 p-2 fw-bold text-center">
        Posts in {{  $type->name }} type
    </h2>

    @foreach ($type->posts as $post)
    <div class="card text-center my-4">
        <div class="card-header">
            {{ $post->user->name }}
        </div>
        <div class="card-body p-3 m-3">
            <h2 class="card-title fw-bold p-3">
                {{ $post->title }}
            </h2>
            <p class="card-text mb-4">
                {{ $post->content }}
            </p>

            <form action="{{ route('admin.posts.clearType', $post) }}" method="POST" class="d-inline-block form-deleter" data-element-name='"{{ $post->title }}"'>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-sm btn-danger">
                    Remove post from {{ $type->name }} type
                </button>
            </form>
        </div>

        <div class="card-footer text-muted">
            {{ $post->post_date }}
        </div>

    </div>
    @endforeach
</div>
@endsection