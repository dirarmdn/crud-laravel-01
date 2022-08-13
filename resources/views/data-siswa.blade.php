@extends('layout.admin')

<title>Data Siswa</title>

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <br><br>
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
        <div class="wrapper">
      <div class="container">
          <a href="/tambahsiswa" class="btn btn-success my-3">Add +</a>

          <table class="table table-hover" id="example">
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">NIS</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $w)
                  <tr>
                      <th scope="row">{{ $key + 1 }}</th>
                      <td>{{ $w->nis }}</td>
                      <td>{{ $w->nama }}</td>
                      <td>{{ $w->tmplahir }}</td>
                      <td>{{ $w->tgllahir }}</td>
                      <td>{{ $w->kelamin }}</td>
                      <td>
                          <a href="/showdata/{{$w->nis}}" class="btn btn-info">Edit</a>
                          <a href="#" class="btn btn-danger delete" data-id="{{ $w->nis }}">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
          </table>
          <br><br><br>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/f13fa7e0b3.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
  $('.delete').click(function(){
    var siswaid = $(this).attr('data-id');
    swal({
      title: "Yakin??",
      text: "Kamu akan menghapus data ini",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/deletesiswa/"+siswaid+""
        swal("BAM! Data berhasil dihapus:(", {
          icon: "success",
        });
      } else {
        swal("Data tidak jadi dihapus");
      }
    });
  });
  </script>
  <script>
          $(document).ready(function() {
              $('#sidebarCollapse').on('click', function() {
                  $('#sidebar').toggleClass('active');
              });
          });
          $(document).ready(function () {
      $('#example').DataTable();
  });
      </script>
  @if (session()->has('success'))
  <script>
      toastr.success({{ Session::get('success') }});
  </script>
  @endif
@endpush