@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Anak Asuh</h4>
            <form class="forms-sample" action="{{route('db.anak-asuh.store')}}" method="POST">
                @csrf
                 {{-- handle error --}}
                @if ($errors->any())
                <div class="pt-4 pb-2">
                    @foreach ($errors->all() as $error)
                    <p class="text-center small">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
              <div class="form-group">
                <label for="exampleInputUsername1">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="" required>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Umur</label>
                <input type="number" name="umur" class="form-control" placeholder="Umur" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Kelas</label>
                <input type="number" name="kelas" class="form-control" placeholder="Kelas" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Jenjang Pendidikan</label>
                <input type="text" name="jenjang" class="form-control" placeholder="Jenjang Pendidikan" required>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection