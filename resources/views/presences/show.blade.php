@extends('layouts.app')

@push('style')
@powerGridStyles
@endpush

@section('content')
<style>
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
<div class="card2 mb-3">
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
    <div class="card-body card__content">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <h5 class="card-title">{{ $attendance->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $attendance->description }}</h6>
                <div class="d-flex align-items-center gap-2">
                    @include('partials.attendance-badges')
                    <a href="{{ route('presences.permissions', $attendance->id) }}" class="badge text-bg-info">Anggota
                        Izin</a>
                    <a href="{{ route('presences.not-present', $attendance->id) }}" class="badge text-bg-danger">Belum
                        Absen</a>
                    @if ($attendance->code)
                    <a href="{{ route('presences.qrcode', ['code' => $attendance->code]) }}"
                        class="badge text-bg-success">QRCode</a>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-2">
                            <small class="fw-bold text-muted d-block">Jam Masuk</small>
                            <span>{{ $attendance->start_time }} - {{ $attendance->batas_start_time }}</span>
                        </div>
                        <div class="mb-2">
                            <small class="fw-bold text-muted d-block">Jam Pulang</small>
                            <span>{{ $attendance->end_time }} - {{ $attendance->batas_end_time }}</span>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-2">
                            <small class="fw-bold text-muted d-block">Rombel</small>
                            <div>
                                @foreach ($attendance->positions as $position)
                                <span class="badge text-bg-success d-inline-block me-1">{{ $position->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <livewire:presence-table attendanceId="{{ $attendance->id }}" />
</div>

@endsection

@push('script')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
@powerGridScripts
@endpush