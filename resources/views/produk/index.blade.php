@extends('layouts.master')
@section('konten')
            <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
                                    <h1 class="panel-title">Data Produk</h1>
                                    @if(session('sukses'))
                                    <br>
                                        <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                                    @endif
                                    <div class="right">
                                    <button type="button" data-toggle="modal" data-target="#modaltambah"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th width="30%">Nama Produk</th>
                                                <th width="10%">Stok</th>
                                                <th width="20%">Harga</th>
                                                <th width="25%">Kadaluwarsa</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($data_produk as $p)
                                            <tr>
                                                <td >{{$p->nama_produk}}</td>
                                                <td >{{$p->stok}}</td>
                                                <td >Rp.{{$p->harga}},00</td>
                                                <td > {{$p->kadaluwarsa}}</td>
                                                <td>
                                                    <div class="btn-group pull-right" role="group">
                                                    <a href="/produk/{{$p->id}}/edit"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                                    <a href="/produk/{{$p->id}}/delete"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mengahapus produk Ini?')">Delete</button></a>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
				</div>
            </div>
        <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Tambah Produk</h1>
            </div>
            <div class="modal-body">
                <form action="/produk/tambah" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                    <input type="text" class="form-control"  name = "nama_produk"  placeholder="Nama Produk">
                </div>
                <br>
                <div class="mb-3">
                    <input type="text" class="form-control"  name = "stok"  placeholder="Stok">
                </div>
                <br>
                <div class="mb-3">
                    <input type="text" class="form-control"  name = "harga"  placeholder="Harga">
                </div>
                <br>
                <div class="mb-3">
                    <input type="date" class="form-control"  name = "kadaluwarsa"  placeholder="Kadaluwarsa">
                </div>
                <br>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
        </div>
        </div>
			<!-- END MAIN CONTENT -->
        </div>
@endsection