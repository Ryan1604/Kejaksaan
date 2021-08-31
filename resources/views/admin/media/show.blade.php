@extends('admin.layouts.master')
@section('title', 'Detail Kartu TIK Pengawasan Media Komunikasi')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/modules/select2/dist/css/select2.min.css') }}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Modal -->
 
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Kartu TIK Pengawasan Media Komunikasi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.media.index') }}">
                            <i class="fa fa-file-pdf"></i>
                            Kartu TIK Pengawasan Media Komunikasi
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fa fa-edit"></i>
                        Detail
                    </div>
                </div>
            </div>
            <div class="section-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Identitas</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-md">
                                <tr>
                                    <td>Nama Media Komunikasi</td>
                                    <td class="text-center">{{ $data->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Nama / NPWP Perusahaan Media Komunikasi</td>
                                    <td class="text-center">{{ $data->npwp }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Usaha Media Komunikasi</td>
                                    <td class="text-center">{{ $data->jenis }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Perusahaan Media Komunikasi</td>
                                    <td class="text-center">{{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon / Website / Email</td>
                                    <td class="text-center">{{ $data->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Pimpinan Media Komunikasi</td>
                                    <td class="text-center">{{ $data->nama_pimpinan }}</td>
                                </tr>
                                <tr>
                                    <td>Penanggung Jawab Media Komunikasi</td>
                                    <td class="text-center">{{ $data->penanggung_jawab }}</td>
                                </tr>
                                <tr>
                                    <td>Ijin Usaha Media Komunikasi</td>
                                    <td class="text-center">{{ $data->ijin_usaha }}</td>
                                </tr>
                                <tr>
                                    <td>Waktu Peredaran Media Komunikasi</td>
                                    <td class="text-center"> {{ date('d M Y', strtotime($data->waktu)) }}</td>
                                </tr>
                                <tr>
                                    <td>Daerah Peredaran Media Komunikasi</td>
                                    <td class="text-center">{{ $data->daerah }}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Peredaran Media Komunikasi</td>
                                    <td class="text-center">{{ $data->jumlah }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td class="text-center">{{ $data->kecamatan->name }}</td>
                                </tr>
                            </table>
                          </div>
                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Biodata Intelijen</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-md">
                                <tr>
                                    <td>Kasus / Masalah yang terjadi</td>
                                    <td>{{ $data->kasus }}</td>
                                </tr>
                                <tr>
                                    <td>Latang belakang dan akibatnya</td>
                                    <td>{{ $data->background}}</td>
                                </tr>
                                <tr>
                                    <td>Tindakan yang dilakukan oleh</td>
                                    <td>{{ $data->tindakan }}</td>
                                </tr>
                                <tr>
                                    <td>Tindakan Kejaksaan</td>
                                    <td>{{ $data->tindakan_kejaksaan }}</td>
                                </tr>
                                <tr>
                                    <td>Tindakan Kepolisian</td>
                                    <td>{{ $data->tindakan_kepolisian }}</td>
                                </tr>
                                <tr>
                                    <td>Tindakan Kominfo / Diskominfo</td>
                                    <td>{{ $data->tindakan_kominfo }}</td>
                                </tr>
                                <tr>
                                    <td>Tindakan Pengadilan</td>
                                    <td>{{ $data->tindakan_pengadilan }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan lain-lain</td>
                                    <td>{{ $data->keterangan }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('backend/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/modules/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Setup AJAX CSRF
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.select2').on('select2:selecting', function() {
                $(this).removeClass('is-invalid');
            });

            // Open Modal to Add new Author
            $('#btn-add').click(function(e) {
                e.preventDefault();
                $('#formModal').modal('show');
                $('.modal-title').html('Add Author');
                $('#author-form').trigger('reset');
                $('#btn-save').html('<i class="fas fa-check"></i> Save Changes');
                $('#author-form').find('.form-control').removeClass('is-invalid is-valid');
                $('#btn-save').val('save').removeAttr('disabled');
            });

            $('body').on('keyup', '#title, #category_id, #content, #thumbnail', function() {
                var test = $(this).val();
                if (test == '') {
                    $(this).removeClass('is-valid is-invalid');
                } else {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                }
            })

            function filePreview2(input) {
                if(input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('img').remove();
                        $('#thumbnail').after('<img src="' + e.target.result + '" class="img-thumbnail">');
                    };
                    reader.readAsDataURL(input.files[0]);
                };
            }

            $('#thumbnail').change(function() {
                filePreview2(this);
                $('#valid-thumbnail').html('');
            });

            $('form').submit(function() {
                $('#btn-submit').html('<i class="fas fa-cog fa-spin"></i> Saving...').attr("disabled", true);
            });
        })
    </script>
@endsection
