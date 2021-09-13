@extends('admin.layouts.master')
@section('title', 'Pengawasan Aliran Keagamaan')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengawasan Aliran Keagamaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fa fa-file-pdf"></i>
                        Pengawasan Aliran Keagamaan
                    </div>
                </div>
            </div>

            <div class="section-body">
                <div class="card card-primary">  
                    <div class="card-body">
                        <form action="{{ route('admin.keagamaan.download') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="bulan">Bulan</label>
                                        <select class="select2 form-control form-control-sm @error('bulan') is-invalid @enderror" name="bulan" id="bulan">
                                            <option value="" selected disabled>-- Pilih Bulan --</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                        <div class="invalid-feedback" id="valid-bulan">{{ $errors->first('bulan') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="tahun">Tahun</label>
                                        <select class="select2 form-control form-control-sm @error('tahun') is-invalid @enderror" name="tahun" id="tahun">
                                            <option value="" selected disabled>-- Pilih Tahun --</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                        <div class="invalid-feedback" id="valid-tahun">{{ $errors->first('tahun') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" class="form-control form-control-sm @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan" value="{{ old('jabatan') }}">
                                        <div class="invalid-feedback" id="valid-jabatan">{{ $errors->first('jabatan') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}">
                                        <div class="invalid-feedback" id="valid-nama">{{ $errors->first('nama') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control form-control-sm @error('nip') is-invalid @enderror" name="nip" id="nip" value="{{ old('nip') }}">
                                        <div class="invalid-feedback" id="valid-nip">{{ $errors->first('nip') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round" id="btn-submit">
                                        <i class="fas fa-check"></i>
                                        Download 
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

