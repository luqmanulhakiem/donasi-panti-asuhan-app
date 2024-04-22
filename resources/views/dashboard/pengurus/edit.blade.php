@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Pengurus</h4>
            <form class="forms-sample" action="{{route('db.pengurus.update', ['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                 {{-- handle error --}}
                @if ($errors->any())
                <div class="pt-4 pb-2">
                    @foreach ($errors->all() as $error)
                    <p class="text-center small">{{ $error }}</p>
                    @endforeach
                </div>
                @endif
                <div class="row mb-4">
                  <img 
                    class="mr-5 ml-3"
                    style="width: 100px !important; height: 150px !important; border-radius: 10%;object-fit: cover !important;" 
                    src="{{asset('storage/pengurus/' . $data->foto)}}" alt="Foto Pengurus">
                  <div class="form-group">
  
                    <label for="exampleInputUsername1">Ganti Foto</label>
                    <input class="form-control" type="file" name="foto" accept="image/*">
                  </div>

                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$data->nama}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$data->jabatan}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">No. Hp</label>
                  <input type="text" name="hp" class="form-control" placeholder="No. Hp" value="{{$data->hp}}" required>
                </div>
  
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection