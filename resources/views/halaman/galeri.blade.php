@extends('index')

@section('content')
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Galeri</h2>
                </div>
            </div>
        </div>
    </div>

</div>
 <!-- Lastestnews -->
<div class="Lastestnews blog">
    <div class="container">
        <div class="row">
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 margin">
                        <img class="img-thumbnail img-rounded" src="{{asset('storage/galeri/' . $item->foto)}}" alt="img" />
                    </div>
                @endforeach
            @else
            <h3>Belum ada data</h3>
            @endif
        </div>
    </div>
</div>
<!-- end Lastestnews -->
@endsection