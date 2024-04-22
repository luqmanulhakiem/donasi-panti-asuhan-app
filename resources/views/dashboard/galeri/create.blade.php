@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Galeri</h4>
            <form class="forms-sample" action="{{route('db.galeri.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="exampleInputUsername1">Deskripsi Foto</label>
                <input type="text" name="desk" class="form-control" placeholder="Deskripsi Foto" >
              </div>
              
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection