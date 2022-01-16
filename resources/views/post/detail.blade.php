@extends('app')
@section('content')

    <div class="card mt-5">
        <div class="card-header d-flex justify-content-between">
            <h5>Details Post</h5>
            <a href="{{ url('/posts') }}"> <span class="">
                    << Back</span></a>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <span>{{ $post->name }}</span>
            <hr>
            <h4 class="card-text">Description </h4>
            <span>{{ $post->description }}</span>
        </div>

    </div>

@endsection
