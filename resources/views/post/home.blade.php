@extends('app')
@section('content')
    <div class="col-12">
        <div class="mt-2">
            <a href="{{ url('posts/create') }}" class="btn btn-primary btn-sm">Create Post</a>
        </div>
        <table class="table mt-3 table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>
                            <p>{{ $post->name }}</p>
                        </td>
                        <td>
                            <p>{{ $post->description }}</p>
                        </td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="/posts/{{ $post->id }}" class="btn btn-primary btn-sm mr-2">View Details</a>
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="/posts/{{ $post->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm mr-2">Delete</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
