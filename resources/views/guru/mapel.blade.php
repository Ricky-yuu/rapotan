@extends('layouts.app')
@section('content')
<div class="row">
  @foreach($mapel as $mapels)
  <div class="col-md-4">
    <a href="{{route('dataSiswa', ['id' => $mapels->id])}}">
      <div class="card text-center" style="width: 18rem;">
        <img src="{{asset('images')}}/book.png" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
          <h5 class="card-title">{{$mapels->nama_mapel}}</h5>
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection
