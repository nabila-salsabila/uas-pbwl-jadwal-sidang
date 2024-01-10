@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mb-4">{{ __('Halo,') }} <strong>{{ Auth::user()->name }}</strong>! {{ __('Selamat datang di Sistem Informasi penjadwalan Sidang.') }}</p>
                    
                    <div class="alert alert-info" role="alert">
                        {{ __('Anda telah berhasil masuk ke sistem. Sekarang Anda dapat menjadwalkan dan mengelola sidang dengan mudah.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
