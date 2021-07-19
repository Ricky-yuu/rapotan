@extends('layouts.app')

@section('content')


<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama Siswa</th>
        <th>email</th>
        <th>kelas</th>
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
          <td> <a href="" class="btn btn-sn. btn-success">Lihat Nilai</a> </td>
        </tr>
        @endforeach

    </tbody>

</table>




@endsection