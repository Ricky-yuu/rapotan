@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Nip</th>
        <th>Nama Siswa</th>
        <th>email</th>
        <th>kelas</th>
        <th>Input Nilai</th>
        <th>Aksi</th>
    </tr>
</thead>
    <tbody>
        @foreach ($user as $users )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $users->nomor_induk }}</td>
          <td>{{ $users->name }}</td>
          <td>{{ $users->email }}</td>
          <td>{{ $users->kelas->nama_kelas }}</td>
          <form class="" action="{{route('simpanNilai')}}" method="post">
            @csrf
          <td>
              <input type="number" name="nilai" value="">
              <input type="hidden" name="noinduk" value="{{$users->nomor_induk}}">
              <input type="hidden" name="mapel" value="{{$idMapel}}">
          </td>
          <td> <button type="submit" name="button" class="btn btn-primary">Simpan</button> </td>
        </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
