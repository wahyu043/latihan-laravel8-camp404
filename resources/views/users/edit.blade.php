@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">
            <h3>Ubah Data User</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" class="form-control" required>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="siswa" {{ $user->role == 'siswa' ? 'selected' : '' }}>Siswa</option>
                        <option value="super-admin" {{ $user->role == 'super-admin' ? 'selected' : '' }}>Super Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>

                <button type="submit" class="btn btn-success">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection