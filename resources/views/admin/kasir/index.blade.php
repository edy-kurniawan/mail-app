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
                <h4 class="mb-sm-0 font-size-18">Menu Kasir</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Menu/Data Kasir</li>
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
                            <h4 class="card-title">Data Kasir</h4>
                            <p class="card-title-desc">Anda dapat mengelola data kasir pada halaman ini.</p>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="text-end">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">
                                    <i class="mdi mdi-filter"></i> Filter Data
                                </button>
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">
                                    <i class="mdi mdi-plus"></i> Tambah Data
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="table" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIK</th>
                                    <th>Karyawan</th>
                                    <th>Username</th>
                                    <th>Bengkel</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>johndoe</td>
                                    <td>Bengkel A</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="delete_data()">Hapus</button>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
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