@extends('layouts.master2')
@section('konten')
<div class="main">
<!-- MAIN CONTENT -->
    <div class="main-content">
		<div class="container-fluid">
        <br>
			<div class="row justify-content-md-center" >
				<div class="col-md-8">
					<div class="panel">
						<div class="panel-heading">
                            <h1 class="panel-title">Edit Data Produk</h1>
                            <br>
                                @if(session('sukses'))
                                <br>
                                <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                                @endif
						</div>
						<div class="panel-body">
                            <form action="/produk/{{$produk->id}}/update" method="POST">
                                {{csrf_field()}}
                                    <div class="row mb-3">
                                        <label for="inputname" class="col-sm-2 col-form-label">Nama produk</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control"  name = "nama_produk"  value="{{$produk->nama_produk}}">
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <label for="inputname" class="col-sm-2 col-form-label">Stok</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control"  name = "stok"  value="{{$produk->stok}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputname" class="col-sm-2 col-form-label">Harga</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control"  name = "harga"  value="{{$produk->harga}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputname" class="col-sm-2 col-form-label">Kadaluwarsa</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control"  name = "kadaluwarsa"  value="{{$produk->kadaluwarsa}}">
                                        </div>
                                    </div>
                                    
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="/produk"><button type="button" class="btn btn-primary">Tutup</button></a>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
        