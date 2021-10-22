<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Report User List')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')



<div class="mt-4" style="height: auto;">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">{{$users->links()}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white border-b border-gray-200">
            <script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
                <!-- Button trigger modal -->
                <a type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalUser"
                    style=" width: 150px; font-size: 20px; margin-top: 10px;">
                    Add User
                </a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalUser" tabindex="-1" aria-labelledby="exampleModalUser"
                    aria-hidden="true">
                    <div class="modal-dialog vertical-align-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalUser">Tambahkan User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" align="left">
                                <form method="POST" action="{{route('post.registeruserlist')}}"
                                    class="text-center mt-0 col-sm-8 ml-auto mr-auto" style="margin-top: 10px;">
                                    @csrf
                                    <!-- Name -->
                                    <div class="form-group mt-3">
                                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            id="name" type="text" name="name" :value="old('name')"
                                            placeholder="Masukkan Nama Lengkap" required autofocus>
                                        @if ($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name')}}
                                        </div>
                                        @endif
                                    </div>

                                    <!-- Divisi -->
                                    <div class="form-group mt-3">
                                        <select id="inputState" class="form-control" name="divisi">
                                            <option selected>Pilih Divisi</option>
                                            <option value="Produk RS & BO">Produk RS & BO</option>
                                            <option value="Non RS">Non RS</option>
                                            <option value="Keuangan">Keuangan</option>
                                            <option value="HRD & Umum">HRD & Umum</option>
                                            <option value="Manajemen">Manajemen</option>
                                        </select>
                                    </div>

                                    <!-- Jenis Kelamin -->
                                    <div class="form-group mt-3">
                                        <select id="inputState" class="form-control" name="jenis_kelamin">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <!-- NIK -->
                                    <div class="form-group mt-3">
                                        <input id="nik_id" type="number" name="nik_id"
                                            class="form-control {{ $errors->has('nik_id') ? 'is-invalid' : '' }}"
                                            :value="old('nik_id')" placeholder="Masukkan NIK" required>
                                        @if ($errors->has('nik_id'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('nik_id')}}
                                        </div>
                                        @endif
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <input id="password" type="hidden" name="password"
                                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                            required autocomplete="new-password" placeholder="Masukkan Password">
                                        @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password')}}
                                        </div>
                                        @endif
                                    </div>

                                    <!-- Confirmation Password -->
                                    <div class="form-group">
                                        <input id="password_confirmation" type="hidden" name="password_confirmation"
                                            class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                            required placeholder="Masukkan Ulang Password">
                                        @if ($errors->has('password_confirmation'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password_confirmation')}}
                                        </div>
                                        @endif
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-success col-sm-12"
                                        style="margin-top: 7px;">Register</button>
                                </form><br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tutup Modal -->


                <div class="table-responsive mt-3">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Divisi</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr class="text-center">
                                <th scope="row">{{ $users->firstItem() + $key}}</th>
                                <td>{{$user->nik_id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->divisi}}</td>
                                <td>{{$user->jenis_kelamin}}</td>
                                <td>
                                    <a href="/dashboard/userlist/{{$user->id}}/delete" type="button"
                                        class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?')"><i
                                            class="fa fa-trash" aria-hidden="true"></i>
                                        Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection
