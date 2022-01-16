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
            {{-- @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Enter Post Title">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter Description">{{old('description')}}</textarea>
                     @error('description')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </div>
        </form>
    </div>

@endsection
