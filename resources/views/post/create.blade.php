@extends('app')
@section('content')

    <div class="card mt-5">
        <div class="card-header d-flex justify-content-between">
            <h5>Create Post</h5>
            <a href="{{ url('/posts') }}"> <span class="">
                    << Back</span></a>
        </div>
        <form action="/posts" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Post Title">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </div>
        </form>
    </div>

@endsection
