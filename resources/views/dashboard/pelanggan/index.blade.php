@extends('layouts.app')
@section('pageTitle')
List Pelanggan
@endsection
@section('navBarPelanggan')
active
@endsection
@section('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
<!-- END: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
<!-- END: Vendor CSS-->
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/pages/app-users.css">
<!-- END: Page CSS-->
@endsection
@section('content')
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <h1>List Pelanggan</h1>
                <section class="users-list-wrapper">
                    <div class="users-list-filter px-1">
                        
                    </div>
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-body">
                                @if(session('message'))
                                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="d-flex align-items-center">
                                            <span>
                                            {{ session('message') }}
                                            </span>
                                        </div>
                                    </div>
                                @endif
                                <!-- datatable start -->
                                <div class="table-responsive">
                                    <table id="users-list-datatable" class="table">
                                        <thead>
                                            <tr>
                                                <th>Kode Berlanggan</th>
                                                <th>Nama</th>
                                                <th>Nomor Telepon</th>
                                                <th>Alamat</th>
                                                <th>Paket</th>
                                                <th>Kode Sales</th>
                                                <th>status</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pelanggans as $pelanggan)
                                                <tr>
                                                    <td>{{$pelanggan->kodePelanggan}}</td>
                                                    <td>{{$pelanggan->nama}}</td>
                                                    <td>{{$pelanggan->noTelp}}</td>
                                                    <td>{{$pelanggan->alamat}}</td>
                                                    <td>
                                                        @if($pelanggan->paket = "1") Paket Digital Channel 2022 - 30 mbps Internet Telp
                                                        @elseif($pelanggan->paket = "2") Paket Digital Channel 2022 - 30 Mbps Internet TV Hotstar 92 channels
                                                        @elseif($pelanggan->paket = "3") Paket Digital Channel 2022 - 40 Mbps Internet TV Hotstar 92 channels
                                                        @elseif($pelanggan->paket = "4") Paket Digital Channel 2022 - 40 mbps Internet Telp
                                                        @elseif($pelanggan->paket = "5") Paket Digital Channel 2022 - 50 Mbps Internet TV Hotstar 92 channels
                                                        @elseif($pelanggan->paket = "6") Paket Digital Channel 2022 - 50 mbps Internet Telp
                                                        @elseif($pelanggan->paket = "7") Paket Digital Channel 2022 - 100 Mbps Internet TV Hotstar 92 channels
                                                        @elseif($pelanggan->paket = "8") Paket Digital Channel 2022 - 100 mbps Internet Telp 
                                                        @endif      
                                                        

                                                    </td>
                                                    <td>{{$pelanggan->kodeSales}}</td>
                                                    <td>
                                                        @if($pelanggan->statusPemasangan == 0)
                                                            <span class="badge badge-light-warning">SEDANG BERJALAN (SCBE)</span>
                                                        @elseif($pelanggan->statusPemasangan == 1)
                                                            <span class="badge badge-light-success">SUBMIT SCBE (TERPASANG)</span>
                                                        @elseif($pelanggan->statusPemasangan == 2)
                                                            <span class="badge badge-light-danger">KENDALA JALUR/JARINGAN PT1</span>
                                                        @elseif($pelanggan->statusPemasangan == 3)
                                                            <span class="badge badge-light-danger">KENDALA JALUR/JARINGAN PT2</span>
                                                        @elseif($pelanggan->statusPemasangan == 4)
                                                            <span class="badge badge-light-danger">KENDALA JALUR/JARINGAN PT3</span>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('admin.pelanggan.edit', $pelanggan->id)}}"><i class="bx bxs-detail"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('js')
<script src="{{asset('assets')}}/app-assets/js/scripts/pages/app-users.js"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('assets')}}/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->
@endsection
