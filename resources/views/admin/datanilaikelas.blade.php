@extends('layouts.app')

@section('content')
<div class="row">
  @foreach($kelas as $kelases)
  <div class="col-md-4">
    <a href="{{route('nilaisiswa', ['id' => $kelases->id])}}">
      <div class="card text-center" style="width: 18rem;">
        <img src="{{asset('img/download.png')}}" class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
          <h5 class="card-title">{{$kelases->nama_kelas}}</h5>
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
@endsection