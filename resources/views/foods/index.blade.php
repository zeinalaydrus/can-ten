@extends('layouts.app')


@section('content')

    <div id="carouselExampleIndicators" class="carousel slide w-100" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active w-100 h-50">
                <img src="assets/images/faces/canten.png" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item w-100 h-50">
                <img src="assets/images/faces/2.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item w-100 h-50">
                <img src="assets/images/faces/3.jpg" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 class="mt-2">All Foods
        <a href="{{ route('food.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
    </h1>

    @unless(count($foods))
        <p>No foods</p>
    @endunless

    <div class="row">
        @if (count($foods))
            @foreach ($foods as $food)
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img height="270" width="415" src="{{ asset('/storage/' . $food->image) }}"
                            class="card-image-top">
                        <div class="card-body">
                            <h1><a class="title" href="{{ route('food.show', $food->id) }}">{{ $food->title }}</a></h1>
                            <div class="text-danger">
                                @for ($i = 1; $i <= $food->rating_star; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                            <p>{{ Str::limit($food->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection


<style>
    .title {
        text-decoration: none;
        color: black;
    }
</style>