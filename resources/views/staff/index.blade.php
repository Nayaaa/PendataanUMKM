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
                                    <h1 class="panel-title">Data Staff</h1>
                                    
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
												<th>Nama Staff</th>
                                                <th>Jabatan</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($data_staff as $s)
                                            <tr>
                                                <td>{{$s->nama_staff}}</td>
                                                <td>{{$s->jabatan}}</td>
                                                <td>
                                                    <div class="btn-group pull-right" role="group">
                                                    <a href="/staff/{{$s->id}}/edit"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                                    <a href="/staff/{{$s->id}}/delete"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mengahapus Staff Ini?')">Delete</button></a>
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
                <h1 class="modal-title" id="exampleModalLabel">Tambah Staff</h1>
            </div>
            <div class="modal-body">
                <form action="/staff/tambah" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                    <input type="text" class="form-control"  name = "nama_staff"  placeholder="Nama Staff">
                </div>
                <br>
                <select name="jabatan" class="form-select" aria-label="Default select example">
                    <option selected>Jabatan</option>
                    <option value="Juru Masak">Juru Masak</option>
                    <option value="Pemasaran">Pemasaran</option>
                    <option value="Pembantu">Pembantu</option>
                </select>
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