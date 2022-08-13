@extends('layout.admin')

<title>Data Pegawai</title>

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
              <h1 class="m-0">Data Pegawai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pegawai</li>
              </ol>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
          <div class="wrapper">
        <div class="container">
            <a href="/tambahpegawai" class="btn btn-success my-2 mb-4">Add +</a>
    
            <table class="table table-hover" id="example">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $w)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $w->nip }}</td>
                        <td>{{ $w->nama }}</td>
                        <td>{{ $w->tmplahir }}</td>
                        <td>{{ $w->tgllahir }}</td>
                        <td>{{ $w->kota }}</td>
                        <td>
                            <a href="/tampilkandata/{{$w->replid}}" class="btn btn-info">Edit</a>
                            <a href="#" data-id="{{ $w->replid }}" class="btn btn-danger delete">Delete</a>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
  <script>
  $('.delete').click(function(){
    var pegawaiid = $(this).attr('data-id');
    swal({
      title: "Yakin??",
      text: "Kamu akan menghapus data ini",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/deletedata/"+pegawaiid+""
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
      toastr.success("{!! session()->get('success')!!}");
  </script>
  @endif
  @endpush