<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Print by Date')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div class="mt-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white border-b border-gray-200">
                <div class="container mt-3s text-center">
                    <div class="card-deck">
                        <div class="card ">
                            <a class="btn btn-success" href="{{route('admin.dashboard')}}"
                                style="position: absolute;margin-top:20px;margin-left:20px;"><i
                                    class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                                Back</a>
                            <img class="card-img-top img-fluid ml-auto mr-auto mt-1" src="/image/formicon.png"
                                alt="Card image cap" style="width: 135px;">

                            <div class="card-body">
                                <h4>
                                    Temperature Data Report by Date
                                </h4>
                                <div class="form-group col-md-12">
                                    <label for="">First Date : </label>
                                    <input type="date" id="tanggal_awal" name="tanggal_awal" class="form-control"
                                        autocomplete="off" value="{{date('Y-m-d')}}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Last Date : </label>
                                    <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control"
                                        autocomplete="off" value="{{date('Y-m-d')}}">
                                </div>

                                <a href=""
                                    onclick="this.href='/dashboard/temperature/cetak_temperature_pertanggal/'+ document.getElementById('tanggal_awal').value + '/' + document.getElementById('tanggal_akhir').value"
                                    class="btn btn-success mt-4" target="_blank" style="width: 100%; "><i
                                        class="fa fa-print" aria-hidden="true"></i>
                                    Print</a>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<br>


@endsection
