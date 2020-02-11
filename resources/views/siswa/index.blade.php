@extends('layout/main')

@section('title', 'Daftar Siswa')

@section('container')
    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-2">Daftar Siswa</h1>

    <table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">NISN</th>
    <th scope="col">Email</th>
    <th scope="col">Jurusan</th>
    <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
     @foreach($siswa as $ss)
    <tr>
    <th scope="row">{{ $loop->iteration }}</th>
    <td>{{ $ss->nama }}</td>
    <td>{{ $ss->nisn }}</td>
    <td>{{ $ss->email }}</td>
    <td>{{ $ss->jurusan }}</td>
    <td>
    <a href=""class="badge badge-success">Edit</a>
    <a href=""class="badge badge-danger">Delete</a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
@endsection-