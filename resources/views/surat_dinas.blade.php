<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Surat Dinas</title>

        <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('public/lib/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/lib/bootstrap-toggle/css/bootstrap-toggle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/lib/bootstrap/css/bootstrap-select.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/lib/font-awesome/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/lib/dripicons/webfont.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('lib/datatable/dataTables.bootstrap4.min.css') }}"> -->
    <!-- <link href="{{ asset('lib/datatable-select/datatables.select.min.css') }}" rel="stylesheet"> -->

    <script type="text/javascript" src="{{ asset('public/lib/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/lib/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/lib/bootstrap/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!-- <script type="text/javascript" src="{{ asset('lib/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lib/datatable-select/datatables.select.js') }}"></script>
    <script src="{{ asset('lib/datatable-select/datatables.select.min.js') }}"></script> -->

    </head>
    <body>        
        <div class="row">
            <div class="card col-6">
                KIRIM
                <hr>
                <form id="data-kirim-form">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label text-right">Unit Kerja</label>
                        <div class="input-group">
                            <select name="unit_kerja" id="unit_kerja" class="form-control" data-live-search="true" data-live-search-style="begins" title="Select Unit...">
                                @foreach($list_unit_kerja as $unit)
                                <option value="{{$unit->id}}">{{$unit->nama_unit_kerja}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label text-right">Jabatan</label>
                        <div class="input-group">
                            <input type="text" name="jabatan_id" class="form-control" id="jabatan_id" aria-describedby="code" hidden="">
                            <input type="text" name="jabatan" class="form-control" id="jabatan" aria-describedby="code" readonly>
                            <div class="input-group-append">
                                <button id="browse_jabatan" type="button" class="btn btn-sm btn-default" title="Browse"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label text-right">Pegawai</label>
                        <div class="input-group">
                            <input type="text" name="pegawai_id" class="form-control" id="pegawai_id" aria-describedby="code" hidden="">
                            <input type="text" name="pegawai" class="form-control" id="pegawai" aria-describedby="code" readonly>
                            <div class="input-group-append">
                                <button id="browse_pegawai" type="button" class="btn btn-sm btn-default" title="Browse"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label text-right">Redaksi</label>
                        <div class="input-group">
                            <select name="redaksi" id="redaksi" class="form-control" data-live-search="true" data-live-search-style="begins" title="Select Unit..." style="width: 100px">
                                <option value="Asli">Asli</option>
                                <option value="Tembusan">Tembusan</option>
                            </select>
                        </div>
                    </div>
                    <button type="button" id="btn_simpan" class="btn btn-primary">Simpan</button>

                    <br>
                    <br>
                    <div class="form-group">
                        <div class="table-responsive">
                            <table id="tbl_data_pengirim" class="table table-bordered text-nowrap table-sm">
                                <thead>
                                    <tr>
                                        <th class="align-middle text-uppercase">ID</th>
                                        <th class="align-middle text-uppercase">Jabatan</th>
                                        <th class="align-middle text-uppercase">Pegawai</th>
                                        <th class="align-middle text-uppercase">Redaksi</th>
                                        <th class="align-middle text-uppercase">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </form>
            </div>

            <div class="card col-6">
                FILE SURAT
                <hr>
                <div class="input-group">
                    <input type="text" id="file_surat" name="file_surat" class="form-control form-control-danger" hidden>
                    <input rows="3" type="file" id="input-file-now" name="input-file-now" class="form-control form-control-danger"></input>
                </div>
                
                <div class="form-group">
                    <div class="table-responsive">
                        <table id="tbl_file_surat" class="table table-bordered text-nowrap table-sm">
                            <thead>
                                <tr>
                                    <th class="align-middle text-uppercase">ID</th>
                                    <th class="align-middle text-uppercase">No.</th>
                                    <th class="align-middle text-uppercase">File Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>

        <div id="browseJabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="modal_header" class="modal-title"></h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table id="tbl_browse_jabatan" class="table table-bordered text-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-uppercase">ID</th>
                                                <!-- <th class="align-middle text-uppercase">No.</th> -->
                                                <th class="align-middle text-uppercase">Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <button type="button" id="select_jabatan" name="select_jabatan" class="btn btn-primary">Select</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="browsePegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="modal_header" class="modal-title"></h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <div class="table-responsive">
                                    <table id="tbl_browse_pegawai" class="table table-bordered text-nowrap table-sm">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-uppercase">ID</th>
                                                <th class="align-middle text-uppercase">Pegawai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <button type="button" id="select_pegawai" name="select_pegawai" class="btn btn-primary">Select</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('.selectpicker').selectpicker({
                style: 'btn-link',
            });
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('#tbl_data_pengirim').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('data_kirim') }}",
                        type: "GET",
                    },
                    columns: [
                        {
                            "data": "id",visible: false
                        },
                        {
                            "data": "jabatan"
                        },
                        {
                            "data": "pegawai"
                        },
                        {
                            "data": "redaksi"
                        },
                        {
                            "data": "hapus"
                        },                      
                    ],
                    //      aligment left, right, center row dan coloumn
                    order: [["0", "asc"]],
                    columnDefs: [
                        { className: "text-left", targets: [0, 1] },
                        { className: "text-center", targets: [4] },
                        { width: "15%", targets: 1 },
                    ],
                    autoWidth: false,
                    responsive: true,
                });

                $("body").on("click", "#delete_data", function (e) {
                    var $row = $(this).closest("tr");
                    var data = $("#tbl_data_pengirim").DataTable().row($row).data();
                    id = data["id"];                    
                    $.ajax({
                        type: "post",
                        url: "data-kirim/destroy/"+id,
                        success: function (response) {
                            for (var key in response) {
                                var success = response["success"];
                            }

                            if ($.trim(success) == "true") {
                                var oTableHarga = $("#tbl_data_pengirim").dataTable();
                                oTableHarga.fnDraw(false);

                            }else {

                            }
                        },
                        error: function (xhr, status, error) {
                            var errorMessage = xhr.status + ": " + xhr.statusText;

                        },
                    });
                });

//=================== jabatan ==============================
                function list_jabatan(id){
                    $("#tbl_browse_jabatan").DataTable({
                        destroy: true,
                        processing: true,
                        serverSide: true,
                        ajax: {
                            url: "data-jabatan/"+id,
                            type: "GET",
                        },
                        columns: [
                            {
                                "data": "id",visible: false
                            },
                            {
                                "data": "jabatan"
                            },                        
                        ],
                        //      aligment left, right, center row dan coloumn
                        order: [["0", "asc"]],
                        columnDefs: [
                            { className: "text-left", targets: [0, 1] },
                            { width: "15%", targets: 1 },
                        ],
                        autoWidth: false,
                        responsive: true,
                    });
                    $("#tbl_browse_jabatan").css("cursor", "pointer");
                }
                
                $('#tbl_browse_jabatan tbody').on( 'click', 'tr', function () {
                    var table = $('#tbl_browse_jabatan').DataTable();
                    var data = table.row(this).data();
                    var id = data['id'];                    
                    var jabatan = data['jabatan'];

                    if ( $(this).hasClass('selected') ) {
                        $(this).removeClass('selected');
                        $('#jabatan_id').val(0);
                        $('#jabatan').val("");
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                        $('#jabatan_id').val(id);
                        $('#jabatan').val(jabatan);
                    }
                } );

                $('#select_jabatan').on("click", function(e) {
                    $('#browseJabatan').modal("hide");
                });
//==============================================================

//=================== pegawai ==============================
                function list_pegawai(id){
                    $("#tbl_browse_pegawai").DataTable({
                        destroy: true,
                        processing: true,
                        serverSide: true,
                        ajax: {
                            url: "data-pegawai/"+id,
                            type: "GET",
                        },
                        columns: [
                            {
                                "data": "id",visible: false
                            },
                            {
                                "data": "nama_pegawai"
                            },                        
                        ],
                        //      aligment left, right, center row dan coloumn
                        order: [["0", "asc"]],
                        columnDefs: [
                            { className: "text-left", targets: [0, 1] },
                            { width: "15%", targets: 1 },
                        ],
                        autoWidth: false,
                        responsive: true,
                    });
                    $("#tbl_browse_pegawai").css("cursor", "pointer");
                }
                
                $('#tbl_browse_pegawai tbody').on( 'click', 'tr', function () {
                    var table = $('#tbl_browse_pegawai').DataTable();
                    var data = table.row(this).data();
                    var id = data['id'];                    
                    var nama_pegawai = data['nama_pegawai'];

                    if ( $(this).hasClass('selected') ) {
                        $(this).removeClass('selected');
                        $('#pegawai_id').val(0);
                        $('#pegawai').val("");
                    }
                    else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');
                        $('#pegawai_id').val(id);
                        $('#pegawai').val(nama_pegawai);
                    }
                } );

                $('#select_pegawai').on("click", function(e) {
                    $('#browsePegawai').modal("hide");
                });
//==============================================================

                $('#btn_simpan').on("click", function(e) {
                    $.ajax({
                        type: "post",
                        url: "data-kirim/store",
                        data: $("#data-kirim-form").serialize(),
                        success: function (response) {
                            for (var key in response) {
                                var success = response["success"];
                            }

                            if ($.trim(success) == "true") {
                                var oTableHarga = $("#tbl_data_pengirim").dataTable();
                                oTableHarga.fnDraw(false);

                            }else {

                            }
                        },
                        error: function (xhr, status, error) {
                            var errorMessage = xhr.status + ": " + xhr.statusText;
                        },
                    });
                });

                $('#browse_jabatan').on("click", function(e) {
                    id=$('#unit_kerja').val();
                    list_jabatan(id);
                    $('#browseJabatan').modal("show");
                });

                $('#browse_pegawai').on("click", function(e) {
                    id=$('#jabatan_id').val();
                    list_pegawai(id);
                    $('#browsePegawai').modal("show");
                });

                $('#tbl_file_surat').DataTable();
                $('.selectpicker').selectpicker();
            });
        </script>
    </body>
</html>
