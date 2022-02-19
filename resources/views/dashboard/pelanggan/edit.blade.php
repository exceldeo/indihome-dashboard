@extends('layouts.app')
@section('pageTitle')
Data Pelanggan
@endsection
@section('css')
<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/app-assets/css/pages/app-users.css">
<!-- END: Page CSS-->
@endsection
@php
    use Illuminate\Support\Facades\Auth;
    $userRole = Auth::user()->role;
@endphp
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
                                        <h3>Data Pelanggan</h3>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Nama</label>
                                                    <input disabled type="text" class="form-control" placeholder="Nama Pelanggan" value="{{$pelanggan->nama}}" name="nama">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Nomor Telepon</label>
                                                    <input disabled type="text" class="form-control" placeholder="Nomor Telepon Pelanggan" value="{{$pelanggan->noTelp}}" name="noTelp">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>E-mail</label>
                                                    <input disabled type="email" class="form-control" placeholder="Email" value="{{$pelanggan->email}}" name="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Paket</label>
                                                <select disabled class="form-control" name="paket">
                                                    <option @if($pelanggan->paket == "1") echo "selected"; @endif>Paket Digital Channel 2022 - 30 mbps Internet Telp</option>
                                                    <option @if($pelanggan->paket == "2") echo "selected"; @endif>Paket Digital Channel 2022 - 30 Mbps Internet TV Hotstar 92 channels</option>
                                                    <option @if($pelanggan->paket == "3") echo "selected"; @endif>Paket Digital Channel 2022 - 40 Mbps Internet TV Hotstar 92 channels</option>
                                                    <option @if($pelanggan->paket == "4") echo "selected"; @endif>Paket Digital Channel 2022 - 40 mbps Internet Telp</option>
                                                    <option @if($pelanggan->paket == "5") echo "selected"; @endif>Paket Digital Channel 2022 - 50 Mbps Internet TV Hotstar 92 channels</option>
                                                    <option @if($pelanggan->paket == "6") echo "selected"; @endif>Paket Digital Channel 2022 - 50 mbps Internet Telp</option>
                                                    <option @if($pelanggan->paket == "7") echo "selected"; @endif>Paket Digital Channel 2022 - 100 Mbps Internet TV Hotstar 92 channels</option>
                                                    <option @if($pelanggan->paket == "8") echo "selected"; @endif>Paket Digital Channel 2022 - 100 mbps Internet Telp</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Alamat Pemasangan</label>
                                                    <fieldset class="form-group">
                                                        <textarea disabled class="form-control" id="basicTextarea" rows="3" value="{{$pelanggan->alamat}}" placeholder="Masukan Alamat pemasangan"></textarea>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Kode Sales</label>
                                                    <input disabled class="form-control" value="{{$pelanggan->kodeSales}}">
                                                </div>
                                            </div>
                                            @if($userRole == 1) 
                                            <form class="form-validate" method="post" action="{{route('admin.pelanggan.update', $pelanggan->id)}}">
                                            @csrf    
                                            @method('PATCH')
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="statusPemasangan" >
                                                        <option value="0" 
                                                        @if($pelanggan->statusPemasangan == "0") 
                                                            selected 
                                                        @endif >Belum Dipasang</option>

                                                        <option value="1"
                                                        @if($pelanggan->statusPemasangan == "1") 
                                                            selected
                                                        @endif >Berhasil Dipasang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Ubah Status Pemasangan</button>
                                                <!-- <button type="reset" class="btn btn-light">Cancel</button> -->
                                            </div>
                                            </form>
                                            @else
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control" name="statusPemasangan" disabled >
                                                        <option value="0" 
                                                        @if($pelanggan->statusPemasangan == 0) 
                                                            selected
                                                        @endif >Belum Dipasang</option>

                                                        <option value="1"
                                                        @if($pelanggan->statusPemasangan == 1) 
                                                            selected
                                                        @endif >Berhasil Dipasang</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @endif 

                                    </div>
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
