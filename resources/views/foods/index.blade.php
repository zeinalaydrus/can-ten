@extends('layouts.master')

@section('content')
    <div class="container">
        @hasrole('admin')
            <div class="container">
                <h1 class="mt-2">All Foods
                    <a href="{{ route('food.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                @endhasrole
            </h1>

            @unless(count($foods))
                <p>No foods</p>
            @endunless

            <div class="row mt-5">
                @if (count($foods))
                    @foreach ($foods as $food)
                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <img class="card-img" style="height:270px" src="{{ asset('/storage/' . $food->image) }}">
                                <div class="card-body">
                                    <h1><a class="title" href="{{ route('food.show', $food->id) }}">{{ $food->title }}</a>
                                    </h1>
                                    <div>
                                        <h1 class="text-warning">
                                            {{ $food->ReviewDatas ? $food->ReviewDatas->avg('star_rating') : '0' }}
                                        </h1>
                                    </div>
                                    <p>{{ Str::limit($food->description, 100) }}</p>
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
