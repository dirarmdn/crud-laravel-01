    <title>Add Employee Data</title>

@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid container">
      <div class="mb-2">
          <h1 class="m-0 text-center">Tambah Data Pegawai</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container mt-5 w-50 mx-auto d-block px-5">
        <form action="/insertpegawai" method="POST">
          @csrf
          <label for="floatingInput">NIP</label>
            <div class="form-group form-floating mb-3">
              <input type="number" class="form-control" id="floatingInput" placeholder="1234567" name="nip">
            </div>
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="floatingInput">Nama Pegawai</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Nama Anda" name="nama">
            </div>
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="floatingInput">Tempat Lahir</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Kota Kelahiran" name="tmplahir">
            </div>
            <label for="floatingInput">Tanggal Lahir</label>
            <div class="form-group form-floating mb-3">
              <input type="date" class="form-control" id="floatingInput" placeholder="18-02-93" name="tgllahir">
            </div>
            <label for="floatingInput">Kota</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="ex:Bandung" name="kota">
            </div>
          <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>
</div>
@endsection