@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid container">
      <div class="mb-2">
          <h1 class="m-0 text-center">Edit Data Siswa</h1>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container mt-5 w-50 mx-auto d-block px-5">
        <form action="/updatesiswa/{{ $data->nis }}" method="POST">
          @csrf
          <label for="floatingInput">NIS</label>
            <div class="form-group form-floating mb-3">
              <input type="number" class="form-control" id="floatingInput" placeholder="1234567" name="nis"
              value="{{ $data->nis }}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <label for="floatingInput">Nama Siswa</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama"
              value="{{ $data->nama }}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <label for="floatingInput">Tempat Lahir</label>
            <div class="form-group form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Birth PLace" name="tmplahir"
              value="{{ $data->tmplahir }}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <label for="floatingInput">Tanggal Lahir</label>

            <div class="form-group form-floating mb-3">
              <input type="date" class="form-control" id="floatingInput" placeholder="18-02-93" name="tgllahir"
              value="{{ $data->tgllahir }}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
            <label for="floatingInput">Gender</label>
            <div class="form-group form-floating mb-3">
              <select name="kelamin" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
            </div>
          <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>
</div>
@endsection