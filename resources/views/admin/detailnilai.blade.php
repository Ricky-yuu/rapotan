@extends('layouts.app')

@section('content')


<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama Pelajaran</th>
        <th>Nilai</th>

    </tr>
</thead>
    <tbody>

        @foreach ($nilai as $users )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $users->id_user }}</td>
          <td>{{ $users->mapel->nama_mapel }}</td>
          <td>{{ $users->nilai }}</td>
        </tr>
        @endforeach

    </tbody>

</table>













@endsection