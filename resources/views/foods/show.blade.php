@extends('layouts.app')

@section('content')
    <div class="card my-5">
        <div class="row">
            <div class="col-6">
                <img class="col-12 card-image m-4" src="{{ asset('/storage/' . $food->image) }}" style="border-radius: 0.5rem;">
            </div>
            <div class="col-6">
                <div class="card-body mt-5">
                    <h1>{{ $food->title }}</h1>
                    <div class="text-danger">
                        @for ($i = 1; $i <= $food->rating_star; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                    <p>{{ $food->description }}</p>

                    <h3>Comment</h3>
                    <ul class="list-group list-group-flush">
                        @if (count($food->comments))
                            @foreach ($food->comments as $comment)
                                <li class="list-group-item"><b>{{ $comment->user->name }}:</b> {{ $comment->content }}
                                    <form action="{{ route('comment.destroy', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link text-danger">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        @else
                            No Comments!
                        @endif
                    </ul>
                    <form class="mb-5" action="{{ route('foods.comment.store', $food->id) }}" method="POST">
                        @csrf
                        <input type="text" name="comment" class="form-control" placeholder="say something....">
                        <button type="submit" class="btn btn-primary float-end mt-2">Comment</button>
                    </form>
                </div>

                <div class="card-footer mt-3">
                    <form action="{{ route('food.destroy', $food->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-link float-end">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
