@extends('dashboard')

@section('content-db')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Kategori</h4>
            <form class="forms-sample" action="{{route('db.kategori.store')}}" method="POST">
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
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection