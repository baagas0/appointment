@extends('layouts.master')
@section('title')
    Pasien
@endsection

@section('css')
    <link href="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            {{ config('app.name') }}
        @endslot
        @slot('li_2')
            Pasien
        @endslot
        @slot('title')
            Riwayat Pasien
        @endslot
        @slot('btn_create')
            javascript:void(0);
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pasien</h4>
                </div>
                <!--end card-header-->
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No KTP</th>
                                <th>No HP</th>
                                <th>No RM</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data will be populated by DataTables -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalForm" role="dialog" aria-labelledby="modalFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormLabel">Riwayat Pasien</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="datatableHistory" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Dibuat</th>
                                    <th>Hari</th>
                                    <th>Pasien</th>
                                    <th>No Antrian</th>
                                    <th>Keluhan</th>
                                    <th>Biaya Periksa</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data will be populated by DataTables -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->
@endsection

@section('script')
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>

    <script>
        "use strict";
        var type_id = "";

        function formatRupiah(angka) {
            var number_string = angka.toString(),
                sisa = number_string.length % 3,
                rupiah = number_string.substr(0, sisa),
                ribuan = number_string.substr(sisa).match(/\d{3}/g);

            if (ribuan) {
                var separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            return 'Rp ' + rupiah;
        }

        var datatable = function() {
            var table = $('#datatable').DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                order: [],
                ajax: {
                    url: '{{ route('backoffice.pasien.data') }}',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    { data: 'nama', name: 'nama' },
                    { data: 'alamat', name: 'alamat' },
                    { data: 'no_ktp', name: 'no_ktp' },
                    { data: 'no_hp', name: 'no_hp' },
                    { data: 'no_rm', name: 'no_rm' },
                    { data: 'id', name: 'action', orderable: false, searchable: false }
                ],
                columnDefs: [
                    {
                        targets: -1,
                        render: function(data, type, row) {
                            let json_row = JSON.stringify(row);
                            return `
                                    <button class="btn btn-sm btn-soft-primary btn-edit" data-row='${json_row}''><i class="fas fa-eye"></i></button>`;
                        }
                    }
                ],
            });

            return {
                init: function() {
                    table;
                },
                reload: function() {
                    table.ajax.reload();
                }
            };

        }();

        var datatableHistory = function() {
            var table = $('#datatableHistory').DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                order: [],
                ajax: {
                    url: '{{ route('backoffice.registrasi.data') }}',
                    // data: {
                    //     id_pasien: '{{ request()->get('id_pasien') }}',
                    // },
                    data: function(d) {
                        d.id_pasien = window.currentPasienId; // Add global variable to store current pasien id
                    },
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    {
                        data: 'created_at',
                        name: 'nama_poli',
                        render: function(data, type, row) {
                            return new Date(data).toLocaleString();
                        }
                    },
                    { data: 'jadwal_periksa.hari', name: 'hari' },
                    { data: 'pasien.nama', name: 'nama' },
                    { data: 'no_antrian', name: 'no_antrian' },
                    { data: 'keluhan', name: 'keluhan' },
                    {
                        data: 'periksa',
                        name: 'biaya_periksa',
                        render: function(data, type, row) {
                            let nominal = undefined;
                            if (row?.periksa?.biaya_periksa) {
                                nominal = row.periksa.biaya_periksa;
                            }

                            return (nominal ? formatRupiah(nominal) : '-');
                        }
                    },
                    {
                        data: 'id',
                        name: 'status',
                        render: function(data, type, row) {
                            let status = '-';
                            let badge = '';
                            if (row.periksa) {
                                badge = 'badge-soft-success';
                                status = 'Selesai';
                            } else {
                                badge = 'badge-soft-warning';
                                status = 'Menunggu Pemeriksaan';
                            }
                            return `<span class="badge ${badge}">${status}</span>`;
                        }
                    },
                ],
                columnDefs: [
                    {
                        targets: 1,
                        render: function(data, type, row) {
                            return `${row.jadwal_periksa.hari}<br />${row.jadwal_periksa.jam_mulai}-${row.jadwal_periksa.jam_selesai}`;
                        }
                    }
                ],
            });

            return {
                init: function() {
                    table;
                },
                reload: function(params) {
                    console.log(params)
                    window.currentPasienId = params.id_pasien; // Store the id_pasien
                    table.ajax.reload();
                }
            };

        }();

        jQuery(document).ready(function() {
            datatable.init();

            $('#datatable').on('click', '.btn-edit', function() {
                let row = $(this).data('row');
                $('.modal-title').text('Riwayat Pasien: ' + row.nama);
                $('#modalForm').modal('show');
                // $('#id').val(row.id);

                datatableHistory.reload({
                    id_pasien: row.id,
                });
            });
        });
    </script>
@endsection
