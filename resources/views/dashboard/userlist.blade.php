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
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
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
                                <td>{{$user->name}}</td>
                                <td>{{$user->divisi}}</td>
                                <td>{{$user->jenis_kelamin}}</td>
                                <td>
                                    <a href="/dashboard/userlist/{{$user->id}}/delete" type="button"
                                        class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
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

