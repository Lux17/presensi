@extends('layouts.app')

@push('style')
@powerGridStyles
@endpush

@section('buttons')
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <style>
            .button {
            border: 2px solid #24b4fb;
            background-color: #24b4fb;
            border-radius: 0.9em;
            padding: 0.8em 1.2em 0.8em 1em;
            transition: all ease-in-out 0.2s;
            font-size: 13px;
            }

            .button span {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-weight: 600;
            }

            .button:hover {
            background-color: #ffffff;
            }
        </style>
        <div class="button">
            <a href="{{ route('positions.create') }}" >
                <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
                Tambah Data
            </a>

        </div>

    </div>
</div>
@endsection

@section('content')
@include('partials.alerts')
<livewire:position-table />
@endsection

@push('script')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
@powerGridScripts
@endpush