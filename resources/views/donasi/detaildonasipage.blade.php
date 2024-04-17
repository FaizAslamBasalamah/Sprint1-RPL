@extends('layout.template-layout')

@section('tittle', 'BagiBarang | detaildonasi')

@section('content')
@include('layout.main-layout')
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
        <p class="ms-2"style="color:    ; width: 400px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae eros dapibus, feugiat tellus non, venenatis metus. Duis vulputate leo sed magna vehicula, quis efficitur nibh facilisis.</p> 
    </span>
        
        <div class="container text-light">
            <div class="col">
                <form action="" method="post">
                    <div class="mb-3"style="width: 400px;">
                        <label for="formGroupExampleInput" class="form-label">Jumlah barang yang ingin didonasikan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </form>
            </div>
        </div>
    <hr class="border" style="color: white">
        <div class="container text-light">
                <div class="col">
                    <form action="" method="post">
                        <div class="mb-3"style="width: 900px;">
                            <label for="formGroupExampleInput" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                    </form>
                </div>
            </div>
            <div class="container text-light">
                <div class="col">
                    <form action="" method="post">
                        <div class="mb-3"style="width: 900px;">
                            <label for="formGroupExampleInput" class="form-label">Kategori Barang</label>
                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                    </form>
                </div>
            </div>
            <div class="container text-light">
                <div class="col">
                    <form action="" method="post">
                        <div class="mb-3"style="width: 900px;">
                            <label for="formGroupExampleInput" class="form-label">Detail Barang</label>
                            <input type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                    </form>
                </div>
            </div>
    <hr class="border" style="color: white">
        <div class="container text-light">
            <div class="col">
                <form action="" method="post">
                    <div class="mb-3"style="width: 900px;">
                        <label for="formGroupExampleInput" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </form>
            </div>
        </div>
        <div class="container text-light">
            <div class="col">
                <form action="" method="post">
                    <div class="mb-3"style="width: 900px;">
                        <label for="formGroupExampleInput" class="form-label">Kategori Barang</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </form>
            </div>
        </div>
        <div class="container text-light">
            <div class="col">
                <form action="" method="post">
                    <div class="mb-3"style="width: 900px;">
                        <label for="formGroupExampleInput" class="form-label">Detail Barang</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                </form>
            </div>
        </div>

        <div class="container justify-content-center mt-3 mb-5">
            <button type="submit" class="btn btn-primary justify-content-center"style="width: 900px;">Selanjutnya</button>
        </div>

@endsection