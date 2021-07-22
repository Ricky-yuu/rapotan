@extends('layouts.app')

@section('content')

<div class="row">
    @foreach ($kelass as $kelas)
        
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="card" style="width: 18rem;">
            <div class="col mb-4 cardss">
                <div class="card">
                    <a href="{{route('indexinputnilai')}}" class="text-color-a">
                        <img src="{{asset('images')}}/book.png" class="card-img-top mx-auto d-block" alt="..." style="width:100%; height:100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kelas->kelas }}</h5>
                        </div>
                    </a>
          </div>
        </div>
    </div>
</div>
@endforeach
  </div>

  @endsection