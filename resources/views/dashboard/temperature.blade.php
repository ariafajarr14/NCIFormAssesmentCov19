<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Report Temperature Check')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')




<div class="mt-4" style="height: auto;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">{{$temperature->links()}}
        
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3 mr-auto ml-auto" style="width: 80%;">
            
            <div class="bg-white border-b border-gray-200">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col" style="width: 10%;">Tanggal</th>
                                <th scope="col">Nama</th>
                                <th scope="col" style="width: 10%;">Suhu</th>
                                <th scope="col" style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($temperature as $key => $temp)
                            <tr class="text-center">
                                <th scope="row">{{ $temperature->firstItem() + $key}}</th>
                                <td>{{$temp->created_at}}</td>
                                <td>{{$temp->clientname}}</td>
                                <td>{{$temp->suhu}} &#8451;</td>
                                <td>
                                    <a href="/dashboard/temperature/{{$temp->id}}/delete" type="button"
                                        class="btn btn-danger">Delete</a>
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
<br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
