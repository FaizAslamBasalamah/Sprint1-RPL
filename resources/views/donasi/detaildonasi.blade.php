@extends('layout.template-layout')

@section('tittle', 'BagiBarang | detaildonasi')

@include('layout.main-layout')
@section('content')
<style>
    span{
    background: url('images/image 1.png');
    }

    body{
        background-color:#395144;
    }

</style>
    <span class="d-block p-5 mb-5">
        <p class="fs-2 fw-bolder ms-2"style="color:#AA8B56; width: 320px">Donasi Barang</p>
        <p class="ms-2"style="width: 400px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae eros dapibus, feugiat tellus non, venenatis metus. Duis vulputate leo sed magna vehicula, quis efficitur nibh facilisis.</p> 
    </span>


    <div class="card-body ms-5 mb-5 text-light"style="width: 900px;">
    <form action="" method="post">
        @csrf
        <div class="form-group mt-3">
            <label for="my-input my-2">Jumlah Donasi yang Diinginkan</label>
            <input id="Jumlah_donasi" class="form-control" type="text" name="jumlah_donasi" required>
        </div>

        <div class="form-group mt-3">
            <label for="my-input my-2">Nama Barang</label>
            <input id="nama_barang" class="form-control" type="text" name="nama_barang" required>
        </div>

        <div class="form-group mt-3">
            <label for="my-input my-2">Kategori Barang</label>
            <input id="kategori_barang" class="form-control" type="text" name="kategori_barang" required>
        </div>

        <div class="form-group mt-3">
            <label for="my-input my-2">Detail Barang</label>
            <input id="detail_barang" class="form-control" type="text" name="detail_barang" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3"style="width: 900px;">Selanjutnya</button>
    </form>
    </div> 

@endsection