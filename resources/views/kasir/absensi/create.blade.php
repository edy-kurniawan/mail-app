@extends('layouts.template')
@section('css')
@endsection
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Masukan Data Absensi</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <form id="createproject-form" autocomplete="off" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Pilih Karyawan</h5>
                        <div class="table-responsive">
                            <table id="table" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" name="check" id="allcheck">
                                        </th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" id="check">
                                        </td>
                                        <td>123456</td>
                                        <td>Andi</td>
                                        <td>Mekanik</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" id="check">
                                        </td>
                                        <td>123457</td>
                                        <td>Tio</td>
                                        <td>Supervisor</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" id="check">
                                        </td>
                                        <td>123458</td>
                                        <td>Caca</td>
                                        <td>Admin</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" id="check">
                                        </td>
                                        <td>123459</td>
                                        <td>Yoga</td>
                                        <td>Admin</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" id="check">
                                        </td>
                                        <td>123460</td>
                                        <td>Yogi</td>
                                        <td>Admin</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="check" id="check">
                                        </td>
                                        <td>123461</td>
                                        <td>Eko</td>
                                        <td>Mekanik</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                
            </div>
            <!-- end col -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Informasi Absensi</h5>

                        <div class="mb-3">
                            <label class="form-label" for="project-status-input">Tanggal</label>
                            <input type="date" class="form-control" id="project-status-input" value="{{ date('Y-m-d') }}">
                        </div>

                        <div>
                            <label class="form-label" for="project-visibility-input">Status</label>
                            <select class="form-select" id="project-visibility-input">
                                <option value="1">Hadir</option>
                                <option value="2">Tidak Hadir</option>
                            </select>
                        </div>

                        <div class="text-center my-3">
                            <a href="{{ route('kasir.absensi.index')}}"  class="btn btn-primary">Simpan Data</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </form>

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
<script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
    </script>
@endsection