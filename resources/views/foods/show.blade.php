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


        <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
            <div class="container">
                <div class="row mt-5">
                    <h4>Comment Section :</h4>
                    <div class="col-sm-12 mt-5">
                        @if (count($food->comments))
                            @foreach ($food->ReviewData as $review)
                                <div class=" review-content">
                                    <img src="https://www.w3schools.com/howto/img_avatar.png" class="avatar ">
                                    <span class="font-weight-bold ml-2">{{ $review->name }}</span>
                                    <p class="mt-1">
                                        @for ($i = 1; $i <= $review->star_rating; $i++)
                                            <span><i class="fa fa-star text-warning"></i></span>
                                        @endfor
                                        <span class="font ml-2">{{ $review->email }}</span>
                                    </p>
                                    <p class="description ">
                                        {{ $review->comments }}
                                    </p>
                                </div>
                                <hr>
                            @endforeach
                        @else
                            No Comments!
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-10 mt-4 ">
                    <form class="py-2 px-4" action="{{ route('review.store') }}" style="box-shadow: 0 0 10px 0 #ddd;"
                        method="POST" autocomplete="off">
                        @csrf
                        <input type="hidden" name="food_id" value="{{ $food->id }}">
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
                        <p class="font-weight-bold ">Review</p>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <div class="rate">
                                    <input type="radio" id="star5" class="rate" name="rating" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" checked id="star4" class="rate" name="rating"
                                        value="4" />
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
                        <div class="mt-3 ">
                            <button class="btn btn-sm py-2 px-3 btn-info">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection





<style>
    * {
        box-sizing: border-box;
    }

    /* Add a gray background color with some padding */
    body {
        font-family: Arial;
        background: #f1f1f1;
    }

    /* Header/Blog Title */
    .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {
        float: left;
        width: 75%;
    }

    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

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

    .rating-container .form-control:hover,
    .rating-container .form-control:focus {
        background: #fff;
        border: 1px solid #ced4da;
    }

    .rating-container textarea:focus,
    .rating-container input:focus {
        color: #000;
    }

    /* End */
</style>
