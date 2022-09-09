@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="card my-5">
            <div class="row">
                <div class="col-6">
                    <img class="col-12 card-image m-4" src="{{ asset('/storage/' . $food->image) }}"
                        style="border-radius: 0.5rem;">
                </div>
                <div class="col-6">
                    <div class="card-body mt-5">
                        <h1>{{ $food->title }}</h1>
                        <p>{{ $food->description }}</p>
                        <h3>Review</h3>
                        <div class="row">
                            <div class="col d-flex flex-row flex-nowrap overflow-auto" style="max-height: 300px">
                                <ul class="list-group list-group-flush">
                                    @if (count($food->comments))
                                        @foreach ($food->comments as $comment)
                                            <li class="list-group-item">
                                                <div class="star">
                                                    @for ($i = 1; $i <= $comment->reviews[0]->star_rating; $i++)
                                                        <span><i class="fa fa-star text-warning"></i></span>
                                                    @endfor
                                                </div>
                                                <b>{{ $comment->user->name }}:</b> {{ $comment->content }}
                                                @if ($comment->user->id == Auth::user()->id)
                                                    <form action="{{ route('comment.destroy', $comment->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-link text-danger">Delete</button>
                                                    </form>
                                                @endif
                                            </li>
                                        @endforeach
                                    @else
                                        No Comments!
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="row justify-content-end mb-1">
                            <div class="col-sm-8 float-right">
                                @if (Session::has('flash_msg_success'))
                                    <div class="alert alert-success alert-dismissible p-2">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Success!</strong> {!! session('flash_msg_success') !!}.
                                    </div>
                                @endif
                            </div>
                        </div>
                        <form class="mb-5" action="{{ route('review.store', $food->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="food_id" value="{{ $food->id }}">
                            <p class="font-weight-bold ">Review</p>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <div class="rate">
                                        <input type="radio" id="star5" class="rate" name="rating" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" class="rate" name="rating"value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" class="rate" name="rating" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" class="rate" name="rating" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $food->id }}" name="food_id">
                            <input type="text" name="comment" class="form-control" placeholder="say something....">
                            <button type="submit" class="btn btn-primary float-end mt-2">Comment</button>
                        </form>
                        <a href="https://api.whatsapp.com/send?phone=6281388649406&text=Selamat%20datang%20di%20kantin%2010,%20Silahkan%20order%20yang%20anda%20inginkan%20:"
                            class="WhatsApp"><i class="bi bi-whatsapp"></i> <span>Order Here</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        display: none;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }
</style>
