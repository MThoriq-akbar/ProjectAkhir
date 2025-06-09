@extends('layout.main')

@section('title','Menu')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Menu Restaurant</h1>
        <a href="{{ route('menu.create') }}" class="btn btn-primary col-lg-12">Tambah Menu</a>
        <hr>
        <div class="row">
            @foreach ($menu as $item)
                <div class="col-md-4 mb-4 ">
                    <div class="card">
                        <div class="card-body ">
                            <img src="{{  $item['url_menu'] }}" class="card-img-top rounded">
                            <hr>
                            <h5 class="card-title text-center">{{ $item['nama_menu'] }}</h5>
                            <hr>
                            <p class="card-text ">Kode Menu : {{ $item['kode_menu'] }}</p>
                            <p class="card-text ">Kategori : {{ $item['kategori']['nama_kategori'] }}</p>
                            <p class="card-text ">Harga : Rp.{{ $item['harga_menu'] }}</p>
                            <hr>
                            <div class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('menu.edit', $item['id']) }}" class="btn btn-sm btn-success col-lg-3">Edit</a>

                                    <form action="{{ route('menu.destroy', $item['id']) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm show_confirm">Delete</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ url('js/app.js') }}"></script>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
  <script>
    Swal.fire({
    title: "Good job!",
    text: "{{session('success')}}",
    icon: "success"
    });
  </script>
@endif
<!-- confirm dialog -->
<script type="text/javascript">
  $('.show_confirm').click(function(event) {
    let form = $(this).closest("form");
    let name = $(this).data("name");
    event.preventDefault();
    Swal.fire({
      title: "Apakah Kamu Yakin Data ini di hapus?",
      text: "Data yang sudah di hapus tidak akan bisa kembali!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Iya saya yakin!"
    })
    .then((willDelete) => {
      if (willDelete.isConfirmed) {
        form.submit();
      }
    });
  });
</script>
@endsection
