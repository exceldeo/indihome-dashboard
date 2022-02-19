@extends('layouts.app')
@section('pageTitle')
Tambah Pelanggan
@endsection
@section('navBarTambahPelanggan')
active
@endsection
@section('css')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/pages/app-users.css">
<!-- END: Page CSS-->
@endsection
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
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
                            <!-- <ul class="nav nav-tabs mb-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                        <i class="bx bx-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                        <i class="bx bx-info-circle mr-25"></i><span class="d-none d-sm-block">Information</span>
                                    </a>
                                </li>
                            </ul> -->
                            <div class="tab-content">
                                <div class="tab-pane active fade show" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->
                                    <div class="media mb-2">
                                        <h3>Formulir Tambah Pelanggan</h3>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <form class="form-validate" action="{{route('admin.pelanggan.store')}}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 col-sm-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Nama</label>
                                                        <input required type="text" class="form-control" placeholder="Masukan Nama Pelanggan" name="nama">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Nomor Telepon</label>
                                                        <input required type="text" class="form-control" placeholder="Masukan Nomor Telepon Pelanggan" name="noTelp">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>E-mail</label>
                                                        <input required type="email" class="form-control" placeholder="Masukan Email Pelangggan" name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Paket</label>
                                                    <select class="form-control" name="paket">
                                                        <option value="1">Paket Digital Channel 2022 - 30 mbps Internet Telp</option>
                                                        <option value="2">Paket Digital Channel 2022 - 30 Mbps Internet TV Hotstar 92 channels</option>
                                                        <option value="3">Paket Digital Channel 2022 - 40 Mbps Internet TV Hotstar 92 channels</option>
                                                        <option value="4">Paket Digital Channel 2022 - 40 mbps Internet Telp</option>
                                                        <option value="5">Paket Digital Channel 2022 - 50 Mbps Internet TV Hotstar 92 channels</option>
                                                        <option value="6">Paket Digital Channel 2022 - 50 mbps Internet Telp</option>
                                                        <option value="7">Paket Digital Channel 2022 - 100 Mbps Internet TV Hotstar 92 channels</option>
                                                        <option value="8">Paket Digital Channel 2022 - 100 mbps Internet Telp</option>                        
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Alamat Pemasangan</label>
                                                        <fieldset class="form-group">
                                                            <textarea required name="alamat" class="form-control" id="basicTextarea" rows="3" placeholder="Masukan Alamat pemasangan"></textarea>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Tambah Pelanggan</button>
                                                <!-- <button type="reset" class="btn btn-light">Cancel</button> -->
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('js')
<script src="{{asset('assets')}}/app-assets/js/scripts/pages/app-users.js"></script>
<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('assets')}}/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->
@endsection
