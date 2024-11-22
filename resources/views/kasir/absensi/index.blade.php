@extends('layouts.template')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    rel="stylesheet" />
<style>
    input[type=number]::-webkit-outer-spin-button,
    input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    .dropdown-menu {
        max-height: 300px;
        overflow-y: scroll;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Menu Absensi</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Menu/Data Absensi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-6 col-12">
                            <h4 class="card-title">Data Absensi</h4>
                            <p class="card-title-desc">Anda dapat mengelola data absensi karyawan pada halaman ini.</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="text-end">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">
                                    <i class="mdi mdi-filter"></i> Filter Data
                                </button>
                                <a href="{{ route('kasir.absensi.create')}}" type="button" class="btn btn-success waves-effect waves-light">
                                    <i class="far fa-calendar-times"></i> Tambah Data Absensi
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="table" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>NIK</th>
                                    <th>Karyawan</th>
                                    <th>Status</th>
                                    <th>Bengkel</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>01/09/2021</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-success">Hadir</span>
                                    </td>
                                    <td>Bengkel A</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02/09/2021</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-danger">Tidak Hadir</span>
                                    </td>
                                    <td>Bengkel A</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>03/09/2021</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-success">Hadir</span>
                                    </td>
                                    <td>Bengkel A</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>04/09/2021</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-danger">Tidak Hadir</span>
                                    </td>
                                    <td>Bengkel A</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>05/09/2021</td>
                                    <td>3456</td>
                                    <td>Budi</td>
                                    <td>
                                        <span class="badge bg-success">Hadir</span>
                                    </td>
                                    <td>Bengkel B</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Create -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Filter Data Absensi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="form-create" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Bulan</label>
                        <input type="month" class="form-control" id="tanggal" name="tanggal" value="{{ date('Y-m') }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="statusa" class="form-label">Status</label>
                        <select class="form-select" id="statusa" name="statusa" required>
                            <option value="">Pilih Status</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Tidak Hadir">Tidak Hadir</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="store">Filter</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ url('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
<script src="{{ url('assets/js/pages/form-file-upload.init.js') }}"></script>
<script>
    $(document).ready(function() {
        var table = $('#table').DataTable();
    });

    function delete_data(){
        Swal.fire({
            title: "Konfirmasi",
            text: "Apakah anda yakin ingin menghapus data ini?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
            }
        });
    }
</script>
@endsection