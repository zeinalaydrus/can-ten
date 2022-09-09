@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card my-5">
            <div class="card-body">
                <h1>Add new Food</h1>
                <form action="{{ route('food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ $food->title }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" value="{{ $food->price }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="image" class="form-label">Upload Image</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                            name="image">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="10" class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description">{{ $food->description }}</textarea>
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
    </div>
@endsection
