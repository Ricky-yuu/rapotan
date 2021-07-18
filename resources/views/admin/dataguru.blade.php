@extends('layouts.app')

@section('content')


<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>nis</th>
        <th>Nama Siswa</th>
        <th>email</th>
        <th>kelas</th>
        
    </tr>
</thead>
    <tbody>
        
        @foreach ($user as $users )

            <td>{{ $loop->iteration }}</td>
            <td>{{ $users->nomor_induk }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->id_kelas }}</td>
            
        @endforeach

    </tbody>

</table>













@endsection