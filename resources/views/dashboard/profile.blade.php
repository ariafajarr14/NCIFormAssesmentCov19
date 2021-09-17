<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'User Profile')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')



<div class="mt-4 ml-auto mr-auto col-sm-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white border-b border-gray-200">
                <div class="container mt-1">
                    <img class="card-img-top ml-auto mr-auto" src="/image/userlist.png" alt="Card image cap"
                        style="width: 140px;">
                    @foreach($users as $user)
                    <div class="data mt-4">
                        <!-- ID User -->
                        <form action="updateprofile" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="idUser" class="col-sm-4 col-form-label">ID User</label>
                                <div class="col-sm-8">
                                    <input id="email" id="idUser" name="id" class="form-control-plaintext"
                                        value="{{$user->id}}" readonly>
                                </div>
                            </div>
                            <!-- NIK -->
                            <div class="form-group row">
                                <label for="staticnik_id" class="col-sm-4 col-form-label">NIK</label>
                                <div class="col-sm-8">
                                    <input id="nik_id" id="staticnik_id" name="nik_id" class="form-control-plaintext"
                                        value="{{$user->nik_id}}" readonly>
                                </div>
                            </div>
                            <!-- Name -->
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{$user->name}}">
                                </div>
                            </div>
                            <!-- Divisi -->
                            <div class="form-group row">
                                <label for="divisi" class="col-sm-4 col-form-label">Divisi</label>
                                <div class="col-sm-8">
                                    <select id="divisi" class="form-control" name="divisi">
                                        <option value="Divisi Marketing" @if($user->divisi == 'Divisi Marketing')
                                            selected
                                            @endif> Divisi Marketing</option>
                                        <option value="Divisi HR" @if($user->divisi == 'Divisi HR') selected
                                            @endif>Divisi
                                            HR</option>
                                        <option value="Divisi PR" @if($user->divisi == 'Divisi PR') selected
                                            @endif>Divisi
                                            PR</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Jenis Kelamin -->
                            <div class="form-group row">
                                <label for="jenkel" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select id="jenkel" class="form-control" name="jenis_kelamin">
                                        <option value="Laki-laki" @if($user->jenis_kelamin == 'Laki-laki') selected
                                            @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($user->jenis_kelamin == 'Perempuan') selected
                                            @endif>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <center><button type="submit" class="btn btn-success mt-1 mb-2">Update</button></center>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> <br>

@endsection
