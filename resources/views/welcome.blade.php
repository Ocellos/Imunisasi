@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Selamat Datang di Web Imunisasi Bayi</h1>
            <p>Informasi penting mengenai imunisasi bayi di rumah sakit.</p>
            <a href="#contact" class="btn btn-primary">Hubungi Kami</a>
        </div>
        <div class="col-md-6">
            <!-- Gambar atau ilustrasi imunisasi bayi dengan ukuran yang disesuaikan -->
            <img src="https://source.unsplash.com/800x600/?baby,vaccine" alt="Imunisasi Bayi" class="img-fluid rounded">
        </div>
    </div>
</div>

<div id="about" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Tentang Kami</h2>
        <p>Web Imunisasi Bayi menyediakan informasi terkini mengenai jadwal imunisasi bayi di rumah sakit. Kami berkomitmen untuk memberikan layanan yang berkualitas dan aman bagi buah hati Anda.</p>
    </div>
</div>

<div id="services" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <h4>Informasi Imunisasi</h4>
                <p>Dapatkan informasi lengkap tentang jadwal dan jenis imunisasi yang diberikan di rumah sakit kami.</p>
            </div>
            <div class="col-md-4">
                <h4>Konsultasi Medis</h4>
                <p>Tersedia layanan konsultasi medis untuk menjawab pertanyaan dan kekhawatiran Anda seputar imunisasi bayi.</p>
            </div>
            <div class="col-md-4">
                <h4>Pendaftaran Imunisasi</h4>
                <p>Daftarkan buah hati Anda untuk mendapatkan jadwal imunisasi secara mudah dan efisien.</p>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Hubungi Kami</h2>
        <form action="#" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
</div>
@endsection
