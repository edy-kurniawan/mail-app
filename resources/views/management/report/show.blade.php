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
                <h4 class="mb-sm-0 font-size-18">Menu Report</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Menu/Data Report</li>
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
                        <div class="col-md-5 col-12">
                            <h4 class="card-title">Data Report</h4>
                            <p class="card-title-desc">Anda dapat melihat data report gaji setiap bengkel pada halaman ini.</p>
                        </div>
                        <div class="col-md-7 col-12">
                            <button type="button" class="btn btn-warning waves-effect waves-light float-md-end mx-1">
                                <i class="mdi mdi-filter"></i> Filter Data
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="table" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bulan</th>
                                    <th>Bengkel</th>
                                    <th>Total Karyawan</th>
                                    <th>Gaji Pokok</th>
                                    <th>Uang Makan</th>
                                    <th>Transport</th>
                                    <th>Tunjangan</th>
                                    <th>Rumah Tangga</th>
                                    <th>Produktifitas</th>
                                    <th>Lain-lain</th>
                                    <th>Lembur Minggu</th>
                                    <th>Total Gaji</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Januari 2024</td>
                                    <td>Bengkel A</td>
                                    <td>10</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 300.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#myModal">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Januari 2024</td>
                                    <td>Bengkel B</td>
                                    <td>10</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 300.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#myModal">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Februari 2024</td>
                                    <td>Bengkel A</td>
                                    <td>10</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 300.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#myModal">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Februari 2024</td>
                                    <td>Bengkel B</td>
                                    <td>10</td>
                                    <td>Rp. 2.000.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 300.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 200.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 100.000</td>
                                    <td>Rp. 3.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#myModal">
                                            <i class="mdi mdi-eye"></i>
                                        </button>
                                        
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4">Total</th>
                                    <th>Rp. 8.000.000</th>
                                    <th>Rp. 800.000</th>
                                    <th>Rp. 400.000</th>
                                    <th>Rp. 1.200.000</th>
                                    <th>Rp. 400.000</th>
                                    <th>Rp. 800.000</th>
                                    <th>Rp. 400.000</th>
                                    <th>Rp. 400.000</th>
                                    <th>Rp. 12.000.000</th>
                                    <th></th>
                                </tr>
                            </tfoot>
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