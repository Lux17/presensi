@extends('layouts.app')

@section('content')
@include('partials.alerts')

<div class="row">
    <style>
        .card {

    background: #ffffff;
    position: relative;
    display: flex;
    place-content: center;
    place-items: center;
    overflow: hidden;
    border-radius: 20px;
    }

    .card h2 {

    color: white;
    font-size: 15px;
    }

    .kotak{
    z-index: 1;
    }

    .card::before {
    content: '';
    position: absolute;
    width: 600px;
    background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));
    height: 130%;
    animation: rotBGimg 3s linear infinite;
    transition: all 0.2s linear;
    }

    @keyframes rotBGimg {
    from {
    transform: rotate(0deg);
    }

    to {
    transform: rotate(360deg);
    }
    }

    .card::after {
    content: '';
    position: absolute;
    background: #07182E;
    ;
    inset: 5px;
    border-radius: 15px;
    }  
    /* .card:hover:before {
    background-image: linear-gradient(180deg, rgb(81, 255, 0), purple);
    animation: rotBGimg 3.5s linear infinite;
    } */

    </style>
    <div class="col-md-7">
        <ul class="list-group">
            @foreach ($attendances as $attendance)
            <a href="{{ route('presences.show', $attendance->id) }}"
                class="list-group-item d-flex justify-content-between align-items-start py-3 card">
                <div class="ms-2 me-auto kotak">
                    <h2>{{ $attendance->title }}</h2>
                    <h2 class="mb-3">{{ $attendance->description }}</h2>
                    {{-- <div class="fw-bold"></div>
                    <p class="mb-0">{{ $attendance->description }}</p> --}}
                </div>
                @include('partials.attendance-badges')
            </a>
            @endforeach
        </ul>
    </div>
</div>
@endsection