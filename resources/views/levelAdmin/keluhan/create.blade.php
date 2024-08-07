@extends('dashboard.appDashboard')
@section('content')
<div class="section-header">
    <h1>Data Keluhan</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{route('admin.admin.dashboard')}}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>

<div class="section-body">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-start">
                <h2 class="section-title">Tambah Data</h2>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('admin.keluhan.store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">Nama Keluhan</label>
                    <input type="text" class="form-control" id="id" placeholder="Masukkan keluhan" name="nama_keluhan">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Ongkos</label>
                    <input type="number" class="form-control" id="id" placeholder="Masukkan ongkos" name="ongkos">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Merk Komputer</label>
                    <select class="form-control" name="id_komputer" id="exampleFormControlSelect1">
                        @foreach ($komputer as $dt_komputer)
                        <option value="{{ $dt_komputer->id_komputer }}">{{ $dt_komputer->merk }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Customers</label>
                    <select class="form-control" name="id_customer" id="exampleFormControlSelect1">
                        @foreach ($customers as $dt_customers)
                        <option value="{{ $dt_customers->id_customer }}">{{ $dt_customers->nama_customer }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Pegawai</label>
                    <select class="form-control" name="id_pegawai" id="exampleFormControlSelect1">
                        @foreach ($pegawai as $dt_pegawai)
                        <option value="{{ $dt_pegawai->id_pegawai }}">{{ $dt_pegawai->nama_pegawai }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection