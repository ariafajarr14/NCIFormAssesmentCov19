<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Report Temperature Check')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')




<div class="mt-4 mb-20" style="height: auto;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <p><i>{{$title}}</i></p>

        <form method="get" action="{{route('temperature.periode')}}">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="">Tanggal Awal : </label>
                    <input type="text" id="datepicker" name="tanggal_awal" class="form-control" autocomplete="off"
                        value="{{date('Y-m-d')}}">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Tanggal Akhir : </label>
                    <input type="text" id="datepicker2" name="tanggal_akhir" class="form-control" autocomplete="off"
                        value="{{date('Y-m-d')}}">
                </div>
                <div class="form-group col-md-3" style="margin-top:31px;">
                    <button class="btn btn-info" type="submit" style="height: 38px;">Filter</button>&nbsp;
                    <a href="{{route('temperature.view')}}" class="btn btn-danger fa fa-refresh" type="submit"
                        style="height: 38px;"><i aria-hidden="true">Get All Data</i></a>
                </div>
                <div class="form-group col-md-4 ml-auto" style="margin-top:31px;">
                    <a href="{{route('temperature.cetak')}}" target="_blank" class="btn btn-outline-dark" type="submit"
                        style="height: 38px;">Print All Report Data</a>&nbsp;
                    <a href="{{route('temperature.cetak.pertanggal.form')}}" class="btn btn-outline-dark" type="submit"
                        style="height: 38px;">Print Data Per Date</a>
                </div>
            </div>


        </form><br>
        {{$temperature->links()}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3 mr-auto ml-auto" style="width: 80%;">

            <div class="bg-white border-b border-gray-200">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" style="width: 10%;">#</th>
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
                                <td>{{date('d F Y H:i:s', strtotime($temp->created_at))}}</td>
                                <td>{{$temp->clientname}}</td>
                                <td>{{$temp->suhu}} &#8451;</td>
                                <td>
                                    <a href="/dashboard/temperature/{{$temp->id}}/delete" type="button"
                                        class="btn btn-danger"
                                        onclick="return confirm('Yakin mau dihapus ?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>
@endsection
