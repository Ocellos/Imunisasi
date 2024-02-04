@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="card-body">
                    <form action="{{ route('submit.form') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_bayi" class="form-label">Nama Bayi</label>
                            <input type="text" name="nama_bayi" class="form-control" id="nama_bayi" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="berat_badan" class="form-label">Berat Badan</label>
                            <input type="text" name="berat_badan" class="form-control" id="berat_badan" aria-describedby="emailHelp">
                        </div>
                        
                        <div class="mb-3">
                            <label for="jenis_imunisasi" class="form-label">Usia ketika imunisasi Campak (Bulan)</label>
                            <input type="text" name="usia_campak" class="form-control" id="usia_campak" aria-describedby="emailHelp">
                        </div>
                            
                        <div class="mb-3">
                            <label for="jenis_imunisasi" class="form-label">Usia ketika imunisasi Polio (Bulan)</label>
                            <input type="text" name="usia_polio" class="form-control" id="usia_polio" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="jenis_imunisasi" class="form-label">Usia ketika imunisasi BCG (Bulan)</label>
                            <input type="text" name="usia_BCG" class="form-control" id="usia_BCG" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label class="form-label"> <b>Keluhan</b></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Demam" id="demam">
                                <label class="form-check-label" for="demam">Demam</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Pusing" id="pusing">
                                <label class="form-check-label" for="pusing">Pusing</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Tidak nafsu makan" id="nafsuMakan">
                                <label class="form-check-label" for="nafsuMakan">Tidak nafsu makan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Mual" id="mual">
                                <label class="form-check-label" for="mual">Mual</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Nyeri otot" id="nyeriOtot">
                                <label class="form-check-label" for="nyeriOtot">Nyeri otot</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Kemerahan di area suntik" id="kemerahanSuntik">
                                <label class="form-check-label" for="kemerahanSuntik">Kemerahan di area suntik</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Anak rewel dan kelelahan" id="rewelKelelahan">
                                <label class="form-check-label" for="rewelKelelahan">Anak rewel dan kelelahan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Muncul bekas berupa bisul" id="bekasBisul">
                                <label class="form-check-label" for="bekasBisul">Muncul bekas berupa bisul</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Demam tinggi" id="demamTinggi">
                                <label class="form-check-label" for="demamTinggi">Demam tinggi</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Peradangan" id="peradangan">
                                <label class="form-check-label" for="peradangan">Peradangan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Pembengkakan di area ketiak sebesar 1 cm" id="pembengkakanKetiak">
                                <label class="form-check-label" for="pembengkakanKetiak">Pembengkakan di area ketiak sebesar 1 cm</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Absen pada area suntikan" id="absenSuntikan">
                                <label class="form-check-label" for="absenSuntikan">Absen pada area suntikan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Pingsan" id="pingsan">
                                <label class="form-check-label" for="pingsan">Pingsan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Pembengkakan seluruh tubuh" id="pembengkakanTubuh">
                                <label class="form-check-label" for="pembengkakanTubuh">Pembengkakan seluruh tubuh</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="keluhan[]" value="Sesak nafas" id="sesakNafas">
                                <label class="form-check-label" for="sesakNafas">Sesak nafas</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Table to display baby information -->
                <div class="card-body">
                    <h5 class="card-title">Informasi Bayi</h5>
                    <div class="table-responsive mt-4">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Nama Bayi</th>
                                    <th scope="col">Usia Imunisasi</th>
                                    <th scope="col">Berat Badan</th>
                                    <th scope="col" colspan="2" style="width: 250px;">Jenis Imunisasi</th>
                                    <th scope="col">Keluhan</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($babies as $baby)
                                    <tr>
                                        <td>{{ $baby->nama_bayi }}</td>
                                        <td>{{ $baby->jenis_kelamin }}</td>
                                        <td>{{ $baby->berat_badan }}</td>
                                        <td colspan="2" style="width: 250px;">
                                            <ul>
                                                <li>Campak: <b>{{ $baby->usia_campak }} Bulan</b></li>
                                                <li>Polio: <b>{{ $baby->usia_polio }} Bulan</b></li>
                                                <li>BCG: <b>{{ $baby->usia_BCG }} Bulan</b></li>
                                            </ul>
                                        </td>
                                        <td>{{ $baby->keluhan }}</td>
                                        <td> 
                                            @if($baby->status == 1)
                                                <span class="badge bg-success">Sudah diperiksa</span>
                                                <a href="hasil/{{ $baby->id }}" class="btn btn-info btn-sm">Lihat Hasil</a>
                                            @else
                                                <span class="badge bg-warning text-dark">Proses</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
