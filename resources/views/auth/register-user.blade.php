@extends('layouts.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="auth-container smaller">
    <div class="auth-card compact">

        <div class="auth-left" style="background-image: url('{{ asset('images/hero.png') }}')">
            <div class="overlay"></div>
        </div>

        <div class="auth-right">

            <h2>Daftar Pencari Kost</h2>
            <p class="sub-text">Temukan kost sesuai kebutuhanmu ✨</p>

            <form>

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-input" placeholder="John Kevin">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-input" placeholder="nama@email.com">
                </div>

                <div class="form-group">
                    <label>No WhatsApp</label>
                    <input type="text" class="form-input" placeholder="08xxxx">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-input">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-input" placeholder="........">
                </div>

                <button class="btn-submit">Daftar</button>

                <div class="bottom-text">
                    Sudah punya akun? <a href="#">Masuk</a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection
