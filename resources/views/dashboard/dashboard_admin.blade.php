<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard')

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
                            <img class="card-img-top img-fluid ml-auto mr-auto mt-1" src="/image/formicon.png"
                                alt="Card image cap" style="width: 135px;">
                            <div class="card-body">
                                <h4>
                                    Report History Self Assesment Covid-19
                                </h4>

                                <a href="/dashboard/formhistory" type="button" class="btn btn-outline-success mt-4"
                                    style="width: 80%; "><i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Check</a>
                                <a href="{{route('form.cetak.assesment.all')}}" target="_blank" type="button"
                                    class="btn btn-outline-success mt-4" style="width: 80%; "><i class="fa fa-print"
                                        aria-hidden="true"></i>
                                    Print All Reports</a>
                                <a href="{{route('form.cetak.assesment.backhome')}}" type="button"
                                    class="btn btn-outline-success mt-4" style="width: 80%; "><i class="fa fa-print"
                                        aria-hidden="true"></i>
                                    Print by Date</a>
                                <br><br>
                            </div>
                        </div>
                        <div class="card ">
                            <img class="card-img-top img-fluid ml-auto mr-auto mt-1" src="/image/temperature.png"
                                alt="Card image cap" style="width: 130px;">
                            <div class="card-body">
                                <h4 class="mt-2">
                                    Report Temperature Data
                                </h4>
                                <a href="/dashboard/temperature" type="button" class="btn btn-outline-success"
                                    style="width: 80%; margin-top:20px;"><i class="fa fa-list-alt"
                                        aria-hidden="true"></i>
                                    Check</a>
                                <a href="{{route('temperature.cetak')}}" target="_blank" type="button"
                                    class="btn btn-outline-success mt-4" style="width: 80%; "><i class="fa fa-print"
                                        aria-hidden="true"></i>
                                    Print All Reports</a>
                                <a href="{{route('temperature.cetak.pertanggal.form.backhome')}}" type="button"
                                    class="btn btn-outline-success mt-4" style="width: 80%; "><i class="fa fa-print"
                                        aria-hidden="true"></i>
                                    Print by Date</a>
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
