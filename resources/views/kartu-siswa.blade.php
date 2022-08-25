@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <div class="col-lg-12">
    <div class="card p-3 py-4 m-5 col-lg-10">
      <div class="content-header">
        <div class="container-fluid container">
          <div class="mb-2">
              <div class="row">
                <div class="col-lg-2 pl-5">
                  <img src="{{ asset('template/dist/img/disdik.png') }}" alt="Disdik Logo" srcset="" style="width: 90px; height:auto;">
                </div>
              <div class="col-lg-8">
                <h2 class="m-0 text-center font-weight-bold pb-1">KARTU PELAJAR</h2>
                <h3 class="m-0 text-center">SMKN 11 BANDUNG</h3>
              </div>
              <div class="col-lg-2">
                <img src="{{ asset('template/dist/img/smk11.png') }}" alt="SMKN 11 Logo" style="width: 80px; height:auto;">
              </div>
            </div>
          </div><!-- /.row -->
          <hr class="bg-white">
        </div><!-- /.container-fluid -->
      </div>
            @foreach ($data as $key => $w)
            <div class="container">
              <div class="row">
                <div class="col-lg-6" style="padding-left:180px;">
                  <img src="{{ asset('template/dist/img/avatarnew.png') }}" class="img-circle elevation-3" alt="profile" style="width: 200px; height:auto;">
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <h3 class="m-0 mb-4">BIODATA</h3>
                    <li class="h5">NISN : {{ $w->nis }}</li>
                    <li class="h5">TTL : {{ $w->tmplahir }}, {{ $w->tgllahir }}</li>
                    <li class="h5">Jenis Kelamin : {{ $w->kelamin }}</li>
                    <li class="h5">Agama : {{ $w->agama }}</li>
                    <li class="h5">Alamat : {{ $w->alamat }}</li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
            <div class="row">
              <div class="col-lg-9"></div>
              <div class="col-lg-3 text-center">
                
                <div class="h6">Bandung, Juli 2022</div>
                <div class="h6">Kepala Sekolah</div>
                <br><br>
                <div class="h6">Ino Soprano, S.Pd, M.M.Pd</div>
                <hr class="bg-white">
                <div class="h6">NIP. </div>
              </div>
            </div>
          </div>
        <div class="d-flex justify-content-center align-items-center">
          {{ $data->links() }}
        </div>
    </div>
  </div>


@endsection
