@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil Mahasiswa</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <div class="mb-3">
                <!-- ==================4================== -->
                <!-- Tambahkan foto ke public/images, lalu tentukan pathnya -->
                <img src="{{$mahasiswa->foto}}" alt="Foto Profil" class="img-thumbnail rounded-circle" width="150">
            </div>
            <!-- ==================5================== -->
            <!-- Buat file tampilan yang akan menampilkan data mahasiswa dalam bentuk tabel. -->
            <!-- Gunakan tag <tr>, <th> dan <td> untuk baris dan kolom. -->
            <tr>
               <td><strong>Nama</strong></td>
               <td>{{ $mahasiswa -> nama}}</td>
             </tr>
             <tr>
               <td><strong>NIM</strong></td>
               <td>{{ $mahasiswa -> nim}}</td>
             </tr>
             <tr>
               <td><strong>Email</strong></td>
               <td>{{ $mahasiswa -> email}}</td>
             </tr>
             <tr>
               <td><strong>Jurusan</strong></td>
               <td>{{ $mahasiswa -> jurusan}}</td>
             </tr>
             <tr>
               <td><strong>Fakultas</strong></td>
               <td>{{ $mahasiswa -> fakultas}}</td>
             </tr>
        </table>
    </div>
</div>
@endsection
