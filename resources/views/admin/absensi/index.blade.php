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
                        <div class="col-md-12 col-12">
                            <h4 class="card-title">Data Absensi</h4>
                            <p class="card-title-desc">Anda dapat mengelola data absensi karyawan pada halaman ini.</p>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="d-flex flex-row bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="bulan">Periode Bulan</label>
                                        <input type="month" class="form-control" id="bulan" name="bulan" value="{{ date('Y-m') }}" required>
                                    </div>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="bulan">Bengel</label>
                                            <select class="form-select" id="bengkel" name="bengkel" required>
                                                <option value="">Pilih Bengkel</option>
                                                <option value="1">Bengkel A</option>
                                                <option value="2">Bengkel B</option>
                                                <option value="3">Bengkel C</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="bulan">Karyawan</label>
                                        <select class="form-select" id="karyawan" name="karyawan" required>
                                            <option value="">Pilih Karyawan</option>
                                            <option value="1">Andi</option>
                                            <option value="2">Budi</option>
                                            <option value="3">Caca</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="p-2 bd-highlight">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="bulan2">Status</label>
                                        <select class="form-select" id="status2" name="status2" required>
                                            <option value="">Pilih Status</option>
                                            <option value="1">Hadir</option>
                                            <option value="2">Tidak Hadir</option>
                                        </select>
                                    </div>
                                </div>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2021-09-01</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-success">Hadir</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="delete_data()">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2021-09-02</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-danger">Tidak Hadir</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="delete_data()">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2021-09-03</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-success">Hadir</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="delete_data()">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>2021-09-04</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>
                                        <span class="badge bg-danger">Tidak Hadir</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="delete_data()">Hapus</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>2021-09-01</td>
                                    <td>123456</td>
                                    <td>Budi</td>
                                    <td>
                                        <span class="badge bg-success">Hadir</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger"
                                            onclick="delete_data()">Hapus</button>
                                    </td>
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
                <h5 class="modal-title" id="myModalLabel">Import Data Gaji</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="form-create" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Masukan File</label>
                        <input type="file" class="form-control" id="file" name="file" required>
                    </div>

                    <a href="{{ url('template.xlsx') }}">Download
                        Template</a>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="store">Import
                    Data</button>
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