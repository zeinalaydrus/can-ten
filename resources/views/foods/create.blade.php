@extends('layouts.app')

@section('content')
    <div class="card my-5">
        <div class="card-body">
            <h1>Add new Food</h1>
            <form action="{{ route('food.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label>Rating Star</label>
                    <input type="text" class="form-control" name="rating_star">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea rows="10" class="form-control" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-end mt-2">submit</button>
            </form>
        </div>
    </div>
@endsection
