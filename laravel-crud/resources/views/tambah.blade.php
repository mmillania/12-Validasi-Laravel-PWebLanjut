@extends('master')

<!--- isi title -->
@section('title', 'Tambah Data')

<!-- isi bagian judul halaman --> 
@section('judul_halaman', 'Tambah Data Mahasiswa')

<!-- isi bagian konten -->
@section('konten')
    <a href="/" class="btn btn-danger">Kembali</a>
    <br/>
    <br/>
<!-- menampilkan validasi eror -->
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- validasi form --> 
    <form action="/mahasiswa/simpan" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{ old('nim') }}"> 
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control"  name="email" value="{{ old('email') }}"> 
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" name="jurusan" value="{{ old('jurusan') }}"> 
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Tambah">
        </div>
       
    </form>
@endsection