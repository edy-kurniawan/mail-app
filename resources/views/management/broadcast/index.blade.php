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
                <h4 class="mb-sm-0 font-size-18">Menu Broadcast</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Menu/Data Broadcast</li>
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
                        <div class="col-md-4 col-12">
                            <h4 class="card-title">Data Broadcast</h4>
                            <p class="card-title-desc">Anda dapat melakukan broadcast slip gaji ke seluruh karyawan</p>
                            {{-- input type month --}}
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="bulan">Periode Gaji</label>
                                <input type="month" class="form-control" id="bulan" name="bulan" value="{{ date('Y-m') }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <button type="button" class="btn btn-warning waves-effect waves-light float-md-end mx-1">
                                <i class="mdi mdi-filter"></i> Filter Data
                            </button>
                            <button type="button" onclick="broadcast()" class="btn btn-primary waves-effect waves-light float-md-end mx-1">
                                <i class="mdi mdi-upload"></i> Kirim Broadcast
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="table" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" name="check" id="allcheck">
                                    </th>
                                    <th>NIK</th>
                                    <th>Karyawan</th>
                                    <th>Bengkel</th>
                                    <th>No Rekening</th>
                                    <th>Email</th>
                                    <th>Total Gaji</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check" id="check">
                                    </td>
                                    <td>123456</td>
                                    <td>Andi</td>
                                    <td>Bengkel A</td>
                                    <td>1234567890</td>
                                    <td>andi@ahas.com</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check" id="check">
                                    </td>
                                    <td>13456</td>
                                    <td>Caca</td>
                                    <td>Bengkel A</td>
                                    <td>1234567890</td>
                                    <td>caca@ahas.com</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                            <i class="mdi mdi-pencil"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="check" id="check">
                                    </td>
                                    <td>123456</td>
                                    <td>Tio</td>
                                    <td>Bengkel B</td>
                                    <td>1234567890</td>
                                    <td>tio@ahas.com</td>
                                    <td>Rp. 1.000.000</td>
                                    <td>
                                        <button type="button" class="btn btn-primary waves-effect waves-light">
                                            <i class="mdi mdi-pencil"></i>
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

@endsection

@section('js')
<script src="{{ url('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
<script src="{{ url('assets/js/pages/form-file-upload.init.js') }}"></script>
<script>

    $(document).ready(function() {
        var table = $('#table').DataTable();

        $('#allcheck').on('click', function() {
            if (this.checked) {
                $('input[name="check"]').each(function() {
                    this.checked = true;
                });
            } else {
                $('input[name="check"]').each(function() {
                    this.checked = false;
                });
            }
        });
    });

    function broadcast() {
        var bulan = $('#bulan').val();
        // change format date
        var date = new Date(bulan);
        var month = date.toLocaleString('default', {
            month: 'long'
        });
        var year = date.getFullYear();
        var bulan = month + ' ' + year;
        var nik = [];
        $('input[name="check"]:checked').each(function() {
            nik.push($(this).closest('tr').find('td:eq(1)').text());
        });

        if (nik.length == 0) {
            // swal
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum memilih karyawan',
            });
        } else {
            if(nik.length == 4){
                var text = 'Anda akan mengirim slip gaji bulan ' + bulan + ' ke 3 karyawan';
            } else {
                var text = 'Anda akan mengirim slip gaji bulan ' + bulan + ' ke ' + nik.length + ' karyawan';
            }
            // swal
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Kirim!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // swal loading
                    Swal.fire({
                        title: 'Loading',
                        html: 'Mohon tunggu sebentar',
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    // setTimeout
                    setTimeout(function() {
                        // swal success
                        Swal.fire(
                            'Berhasil!',
                            'Slip Gaji berhasil dikirim',
                            'success'
                        );
                        // reset checkbox
                        $('input[name="check"]').each(function() {
                            this.checked = false;
                        });
                    }, 2000);
                }
            });
        }
    }
</script>
@endsection