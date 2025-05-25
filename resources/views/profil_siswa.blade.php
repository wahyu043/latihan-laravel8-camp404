@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Profil Siswa</h3>
        </div>

        <div class="card-body">
            @can('isAdmin')
            <a href="{{ route('siswa.index') }}">Kembali</a>
            @endcan
            {{-- Detail satu baris --}}
            <div class="mb-2 d-flex">
                <strong class="w-25">Nama</strong>
                <span>: {{ $siswa->nama }}</span>
            </div>
            <div class="mb-2 d-flex">
                <strong class="w-25">NIS:</strong>
                <span>: {{ $siswa->nis }}</span>
            </div>
            <div class="mb-2 d-flex">
                <strong class="w-25">Tanggal Lahir:</strong>
                <span>: {{ $siswa->tgl_lahir }}</span>
            </div>
        </div>
    </div>
</div>
@endsection