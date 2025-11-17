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

            <form action="{{ route('register.proses') }}" method="POST">
                
                @csrf 

                <input type="hidden" name="role" value="pencari">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" class="form-input" placeholder="John Kevin" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-input" placeholder="nama@email.com" required>
                </div>

                <div class="form-group">
                    <label>No WhatsApp</label>
                    <input type="text" name="phone" class="form-input" placeholder="08xxxx" required>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="gender" class="form-input" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-input" placeholder="........" required>
                </div>

                <button type="submit" class="btn-submit">Daftar</button>

                <div class="bottom-text">
                    Sudah punya akun? <a href="{{ url('/login') }}">Masuk</a>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection