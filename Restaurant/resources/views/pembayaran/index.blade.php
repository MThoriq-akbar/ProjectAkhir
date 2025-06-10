@extends('layout.main')

@section('title','Pembayaran')

@section('content')

<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Daftar Pembayaran</h5>
            <a href="{{route('pembayaran.create')}}" class="btn btn-primary mt-2 mb-3">Tambah Pembayaran</a>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle ">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Nama Pemesan</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Nama Kasir</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Menu</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Metode</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Jumlah</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Total</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Aksi</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-center">{{ $item['reservasi']['nama_pemesan'] }}</td>
                            <td class="text-center">{{ $item['kasir']['nama_kasir'] }}</td>
                            <td class="text-center">{{ $item['menu']['nama_menu'] }}</td>
                            <td class="text-center">{{ $item['metode'] }}</td>
                            <td class="text-center">{{ $item['jumlah'] }}</td>
                            <td class="text-center">{{ $item['menu']['harga_menu'] * $item['jumlah'] }}</td>
                            <td class="text-center">
                                <a href="{{route('pembayaran.edit', $item["id"])}}" class="btn btn-success">Edit</a>
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
