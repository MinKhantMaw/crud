@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card mt-2">
                    <div class="card-header">Post List</div>
                    @foreach ($data as $post)
                        <div class="card-body">
                            <h5 class="card-title">{{$post['name']}}</h5>
                            <p class="card-text">{{$post['description']}}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
