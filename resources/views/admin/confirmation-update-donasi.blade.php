@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Riwayat Donasi')

@section('content')
@include('layout.main-layout')
    <div id="status-letter" class="bg-light p-5">
        
        <div class="container-fluid bg-white p-4 rounded-3 shadow">
            <h5 class="mb-4">Confirmation</h5>
            <form action="" method="put">
                @csrf
                <div class="card">
                    <div class="card-header">Donasi
                        <div class="card-body">
                            <h5 class="card-tittle">ID : {{$donasi->id }}</h5>
                            <p class="card-text">Nama Barang : {{ optional ($donasi -> nama_barang)->nama_barang }}</p>
                            <p class="card-text">Kategori Barang : {{ optional ($donasi -> kategori_barang)->kategori_barang }}</p>
                            <p class="card-text">Detail Barang : {{optional ($donasi -> detail_barang)->detail_barang }}</p>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-center gap-3 mt-5">
                    <button type="submit" name="reject" class="btn btn-danger px-5"> REJECT </button>
                    <button type="submit" name="approve" class="btn btn-success px-5"> APPROVE </button>
                </div>

            </form>
        </div>
    </div>
    @endsection