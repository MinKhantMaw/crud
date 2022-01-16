@extends('app')
@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card mt-5">
                <div class="card-header">Post Edit</div>
                <form action="/posts/{{$data->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <div class="div">
                                <label for="">Title</label>
                                <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                            </div>
                            <div class="div">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="20"
                                    rows="5">{{ $data->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary mt-2">Update</button>
                            <a href="/posts" class="btn btn-dark mt-2">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
