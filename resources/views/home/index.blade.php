@extends('layouts.home')

@section('content')

<style>
.judul{
    color: rgb(0, 0, 0);
}
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




/* card2 style */

.card2 {

 margin: 0 auto;
 background-color: #F8FBFE;
 border-radius: 8px;
 z-index: 1;
}

.tools {
 display: flex;
 align-items: center;
 padding: 9px;
}

.circle {
 padding: 0 4px;
}

.box {
 display: inline-block;
 align-items: center;
 width: 10px;
 height: 10px;
 padding: 1px;
 border-radius: 50%;
}

.red {
 background-color: #ff605c;
}

.yellow {
 background-color: #ffbd44;
}

.green {
 background-color: #00ca4e;
}

</style>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card-body shadow-sm mb-2">
                <div class="card-header judul">
                    Daftar Absensi Kelas
                </div>
                    <div class="card-header">
                        <ul class="list-group">
                            @foreach ($attendances as $attendance)
                            <a href="{{ route('home.show', $attendance->id) }}"
                                class="list-group-item d-flex justify-content-between align-items-start py-3 card">
                                <div class="ms-2 me-auto kotak">
                                    <h2>{{ $attendance->title }}</h2>
                                    <h2>{{ $attendance->description }}</h2>
                                    {{-- <div class="fw-bold text"></div>
                                    <p class="mb-0 text"></p> --}}
                                </div>
                                @include('partials.attendance-badges')
                            </a>
                            @endforeach
                        </ul>
                    </div>
        

            </div>
        </div>
        <div class="col-md-4">
            <div class="card2 shadow-sm">
                <div class="tools">
                    <div class="circle">
                        <span class="red box"></span>
                    </div>
                    <div class="circle">
                        <span class="yellow box"></span>
                    </div>
                    <div class="circle">
                        <span class="green box"></span>
                    </div>
                </div>
                    

                <div class="card__content">
                    <div class="card-header">
                        Informasi Anggota
                    </div>
                    <div class="card-body">
                        <ul class="ps-3">
                            <li class="mb-1">
                                <span class="fw-bold d-block">Nama : </span>
                                <span>{{ auth()->user()->name }}</span>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block">Email : </span>
                                <a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a>
                            </li>
                            <li class="mb-1">
                                <span class="fw-bold d-block">No. Telp : </span>
                                <a href="tel:{{ auth()->user()->phone }}">{{ auth()->user()->phone }}</a>
                            </li>
                            {{-- <li class="mb-1">
                                <span class="fw-bold d-block">Bergabung Pada : </span>
                                <span>{{ auth()->user()->created_at->diffForHumans() }} ({{
                                    auth()->user()->created_at->format('d M Y') }})</span>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection