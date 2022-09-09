@extends('layouts.master')

@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/faces/banner4.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/faces/banner6.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/faces/banner5.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @hasrole('admin')
            <div class="container">
                <h1 class="mt-4">All Foods
                    <a href="{{ route('food.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus mt-1"></i></a>
                @endhasrole
            </h1>

            @unless(count($foods))
                <p>No foods</p>
            @endunless

            <div class="row mt-4">
                @if (count($foods))
                    @foreach ($foods as $food)
                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <img class="card-img" style="height:270px" src="{{ asset('/storage/' . $food->image) }}">
                                <div class="card-body">
                                    <h1><a class="title" href="{{ route('food.show', $food->id) }}">{{ $food->title }}</a>
                                    </h1>
                                    <h4>Rp.{{ $food->price }}</h4>
                                    <h4 class="text-warning">
                                        {{ $food->ReviewDatas ? $food->ReviewDatas->avg('star_rating') : '0', 3 }}<i
                                            class="fa fa-star text-warning"></i>
                                    </h4>
                                    <p>{{ Str::limit($food->description, 150) }}</p>
                                    @hasrole('admin')
                                        <a href="{{ route('food.edit', $food->id) }}" class="btn btn-primary btn-sm"><i
                                                class="bi bi-pencil-square mt-1"></i></a>
                                    @endhasrole
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    @endsection


    <style>
        .title {
            text-decoration: none;
            color: black;
        }
    </style>
