<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'History Suhu')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')



<div class="mt-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"  style="width: 60%;">{{$details->links()}}<br>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ml-auto mr-auto">
            <div class="bg-white border-b border-gray-200" >
            <div class="table-responsive">
                    <table class="table" >
                        <thead>
                            <tr class="text-center" style="color: #6FA74C ;">
                                <th scope="col" style="width:5%;">No</th>
                                <th scope="col" style="width:12%;">Tanggal</th>
                                <th class="text-light" scope="col" style="width:5%; background-color:#6FA74C">Suhu</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($details as $key => $det)
                            <tr class="text-center">
                                <th scope="row">{{ $details->firstItem() + $key}}</th>
                                <td>{{$det->created_at}}</td>
                                <td class="text-light" style="background-color:#6FA74C;"><strong>{{$det->suhu}}</strong></td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <br><br><br><br><br><br><br><br><br>

@endsection
