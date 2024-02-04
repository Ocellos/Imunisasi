@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Hasil Klasifikasi</div>

                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">Nama Bayi:</dt>
                        <dd class="col-sm-9">{{ $hasil['nama_bayi'] }}</dd>

                        <dt class="col-sm-3">Jenis Kelamin:</dt>
                        <dd class="col-sm-9">{{ $hasil['jenis_kelamin'] }}</dd>

                        <dt class="col-sm-3">Berat Badan:</dt>
                        <dd class="col-sm-9">{{ $hasil['berat_badan'] }} kg</dd>

                        <dt class="col-sm-3">Jenis Imunisasi:</dt>
                        <dd class="col-sm-9">{{ $hasil['jenis_imunisasi'] }}</dd>

                        <dt class="col-sm-3">Keluhan:</dt>
                        <dd class="col-sm-9">{{ $hasil['keluhan'] }}</dd>

                        <dt class="col-sm-3">Status:</dt>
                        <dd class="col-sm-9">
                            {{ $hasil['hasil'] }}
                        </dd>
                        <dt class="col-sm-3">Tanggal Pemeriksaan:</dt>
                        <dd class="col-sm-9">{{ $hasil['created_at'] }}</dd>

                        <dt class="col-sm-3">Terakhir Diupdate:</dt>
                        <dd class="col-sm-9">{{ $hasil['updated_at'] }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
