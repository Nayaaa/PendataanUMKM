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
                            <h1 class="panel-title">Edit Data Staff</h1>
                                @if(session('sukses'))
                                <br>
                                <div class="alert alert-success" role="alert">{{session('sukses')}}</div>
                                @endif
                                <div class="right">
                                <button type="button" class="btn" data-toggle="modal" data-target="#modaltambah"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
						</div>
						<div class="panel-body">
                            <form action="/staff/{{$staff->id}}/update" method="POST">
                                {{csrf_field()}}
                                    <div class="row mb-3">
                                        <label for="inputname" class="col-sm-2 col-form-label">Nama Staff</label>
                                        <div class="col-sm-10">
                                        <input type="text" class="form-control" name = "nama_staff"  placeholder="Nama Staff" value="{{$staff->nama_staff}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                        <select name="jabatan" class="form-select" aria-label="Default select example">
                                            <option value="Juru Masak"  @if ($staff->jabatan == 'Juru Masak') selected @endif> Juru Masak</option>
                                            <option value="Pemasaran" @if ($staff->jabatan == 'Pemasaran') selected @endif>Pemasaran</option>
                                            <option value="Pembantu"  @if ($staff->jabatan == 'Pembantu') selected @endif>Pembantu</option>
                                        </select>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="/staff"><button type="button" class="btn btn-primary">Tutup</button></a>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
        