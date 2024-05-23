@extends('layout.aplikasi')

@section('konten')
<div class="form-login">
    <img src="{{ asset('images/asset-contoh.png') }}" alt="Logo Perusahaan" style="display: block; margin: 0 auto 20px; width: 200px;">

    <form method="POST" action="/sesi/login">
        @csrf
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div style="color: red; margin-bottom: 15px;">{{ $message }}</div>
        @enderror

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        @error('password')
            <div style="color: red; margin-bottom: 15px;">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn-primary">Login</button>
    </form>
</div>
@endsection


