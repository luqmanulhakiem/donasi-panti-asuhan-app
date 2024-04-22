@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Pengurus</h4>
            <form class="forms-sample" action="{{route('db.pengurus.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="exampleInputUsername1">Foto</label>
                <input class="form-control" type="file" name="foto" id="" accept="image/*" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">No. Hp</label>
                <input type="text" name="hp" class="form-control" placeholder="No. Hp" required>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection