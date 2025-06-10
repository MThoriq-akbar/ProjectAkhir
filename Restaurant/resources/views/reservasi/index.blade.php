@extends('layout.main')

@section('title','Reservasi')

@section('content')

<div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Daftar Reservasi</h5>
            <a href="{{route('reservasi.create')}}" class="btn btn-primary mt-2 mb-3">Tambah Reservasi</a>
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
                          <h6 class="fw-semibold mb-0">No Telepon</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Meja</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Tanggal</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0 text-center">
                          <h6 class="fw-semibold mb-0">Aksi</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservasi as $index => $item)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td class="text-center">{{ $item['nama_pemesan'] }}</td>
                            <td class="text-center">{{ $item['nohp'] }}</td>
                            <td class="text-center">{{ $item['meja']['jenis_meja'] }} No.{{ $item['meja']['no_meja'] }}</td>
                            <td class="text-center">{{ $item['tanggal'] }}</td>
                            <td class="text-center">{{ $item['status'] }}</td>
                            <td class="text-center">
                                <a href="{{route('reservasi.edit', $item["id"])}}" class="btn btn-success">Edit</a>
                                <form action="{{ route('reservasi.destroy', $item['id']) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus meja ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger col-lg-5" type="submit">Hapus</button>
                                </form>
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
