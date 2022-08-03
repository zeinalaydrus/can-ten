@extends('layouts.app')

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <h1>Add new Food</h1>
            <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label ">Upload Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Rating Star</label>
                    <input type="number" class="form-control @error('rating_star') is-invalid @enderror" id="rating_star"
                        name="rating_star" value="{{ old('rating_star') }}">
                        @error('rating_star')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea rows="10" class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" value="{{ old('descriptiom') }}"></textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary float-end mt-2">submit</button>
            </form>
        </div>
    </div>
@endsection
