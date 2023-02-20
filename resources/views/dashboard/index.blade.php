@extends('layouts.app')

@section('content')
<style>
    .card {
 padding: 2%;
 background: rgb(255, 255, 255);
 border-bottom: 2px solid blueviolet;
 border-right: 2px solid blueviolet;
 border-top: 2px solid white;
 border-left: 2px solid white;
 transition-duration: 1s;
 transition-property: border-top, 
    border-left, 
    border-bottom,
    border-right,
    box-shadow;
}

.card:hover {
 border-top: 2px solid blueviolet;
 border-left: 2px solid blueviolet;
 border-bottom: 2px solid rgb(238, 103, 238);
 border-right: 2px solid rgb(238, 103, 238);
 box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
}

.card__content {
 font-size: small;
 text-align: center;
}

.card__content-heading {
 color: blueviolet;
}

.card__content-body p {
 color: rgb(118, 104, 128);
 padding-bottom: 1rem;
}

.card__content-footer button {
 background-color: rgb(255, 255, 255);
 color: grey;
 font-weight: 700;
 border-radius: .2rem;
 border: 1px solid grey;
 padding: .5rem;
 margin: 1rem;
 transition-duration: 1s;
 transition-property: background-color, color, border;
}

button:hover {
 color: white;
 background-color: rgb(238, 103, 238);
 border: 1px solid white;
 box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
}



</style>
<div>
    <div class="row">
        <div class="col-md-3">

            <div class="card shadow border-left-primary">
                <div class="card-body">
                    <h6 class="fs-6 fw-black">Data Role</h6>
                    <h4 class="fw-bold">{{ $positionCount }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow border-left-danger">
                <div class="card-body">
                    <h6 class="fs-6 fw-black">Data Anggota</h6>
                    <h4 class="fw-bold">{{ $userCount }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection