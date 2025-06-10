@extends('layout.main')

@section('title','Kasir')

@section('content')

<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Daftar Kasir</h5>
            @can('create', App\Kasir::class)
                <a href="{{route('kasir.create')}}" class="btn btn-primary mt-2 mb-3">Tambah Kasir</a>
            @endcan
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle ">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0 text-center">
                            <h6 class="fw-semibold mb-0">No Kasir</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                            <h6 class="fw-semibold mb-0">Nama Kasir</h6>
                        </th>
                        @can('text', App\Kasir::class)
                            <th class="border-bottom-0 text-center">
                                <h6 class="fw-semibold mb-0">No Telepon</h6>
                            </th>
                        @endcan
                        @can('text', App\Kasir::class)
                            <th class="border-bottom-0 text-center">
                                <h6 class="fw-semibold mb-0">Aksi</h6>
                            </th>
                        @endcan
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($kasir as $item)
                        <tr>
                            <td class="text-center">{{ $item['no_kasir'] }}</td>
                            <td class="text-center">{{ $item['nama_kasir'] }}</td>
                            @can('text', App\Kasir::class)
                                <td class="text-center">{{ $item['nohp'] }}</td>
                            @endcan
                            <td class="text-center">
                                @can('edit', App\Kasir::class)
                                    <a href="{{route('kasir.edit', $item["id"])}}" class="btn btn-success">Edit</a>
                                @endcan

                                @can('delete', App\Kasir::class)
                                    <form action="{{ route('kasir.destroy', $item['id']) }}" method="POST" class="d-inline" >
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger col-lg-4 show_confirm" type="submit">Hapus</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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
