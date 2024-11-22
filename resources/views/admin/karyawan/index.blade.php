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
                <h4 class="mb-sm-0 font-size-18">Menu Karyawan</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Menu/Data Karyawan</li>
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
                            <h4 class="card-title">Data Karyawan</h4>
                            <p class="card-title-desc">Anda dapat mengelola data karyawan pada halaman ini.</p>
                        </div>

                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary waves-effect waves-light float-md-end"
                                data-bs-toggle="modal" data-bs-target="#myModal" id="btn-create-post">
                                <i class="fas fa-plus"></i> Tambah Data Karyawan
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="table" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>No. Telepon</th>
                                    <th>Masa Kerja</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1234567890</td>
                                    <td>Andi</td>
                                    <td>Manager</td>
                                    <td>Laki-laki</td>
                                    <td>Jl. Raya No. 1</td>
                                    <td>08123456789</td>
                                    <td>2 Tahun</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" id="btn-edit-post">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button type="button" onclick="delete_data()" class="btn btn-danger btn-sm" id="btn-delete-post">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>0987654321</td>
                                    <td>Budi</td>
                                    <td>Staff</td>
                                    <td>Perempuan</td>
                                    <td>Jl. Raya No. 2</td>
                                    <td>08123456789</td>
                                    <td>1 Tahun</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" id="btn-edit-post">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button type="button" onclick="delete_data()" class="btn btn-danger btn-sm" id="btn-delete-post">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>1234567890</td>
                                    <td>Tio</td>
                                    <td>Manager</td>
                                    <td>Laki-laki</td>
                                    <td>Jl. Raya No. 1</td>
                                    <td>08123456789</td>
                                    <td>2 Tahun</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#myModal" id="btn-edit-post">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button type="button" onclick="delete_data()" class="btn btn-danger btn-sm" id="btn-delete-post">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
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
                <h5 class="modal-title" id="myModalLabel">Tambahkan Karyawan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="form-create" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter name">
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="nominal" class="form-label">NIK</label>
                            <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukan NIK">
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nominal"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="date" name="tanggal" placeholder="Enter date">
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-tanggal"></div>
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jenis" name="jenis" required>
                            <option selected disabled value="">Pilih Jenis</option>
                            <option value="Pemasukan">Laki - Laki</option>
                            <option value="Pengeluaran">Perempuan</option>
                        </select>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-jenis"></div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="nominal" class="form-label">No Rekening</label>
                            <input type="number" class="form-control" id="nominal" name="nominal"
                                placeholder="Enter Nominal ">
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nominal"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="nominal" class="form-label">No Telp</label>
                            <input type="number" class="form-control" id="nominal" name="nominal"
                                placeholder="Enter Nominal ">
                            <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-nominal"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" id="keterangan" name="keterangan"
                            placeholder="Enter information"></textarea>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-keterangan"></div>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Jabatan</label>
                        <select class="form-select" id="id_status" name="status" required>
                            <option selected disabled value="">Pilih Jabatan</option>
                            <option value="cash">Mekanik</option>
                            <option value="transfer">Kepala Mekanik</option>
                            <option value="transfer">Admin</option>
                        </select>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-status"></div>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Lokasi Bengkel</label>
                        <select class="form-select" id="id_status" name="status" required>
                            <option selected disabled value="">Pilih Lokasi Bengkel</option>
                            <option value="cash">Agatha Motor</option>
                            <option value="transfer">Buana Sari II</option>
                            <option value="transfer">Mitra Buana</option> 
                        </select>
                        <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-status"></div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary waves-effect waves-light" id="store">Simpan
                    Data</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
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