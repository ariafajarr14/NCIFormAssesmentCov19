<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Dashboard')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<!-- 
<div class="modal fade" id="myModal" style="color: #6FA74C;">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Halo! <strong>{{auth()->user()->name}}</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="left">
                    <p>Jangan lupa untuk mengisi formulir Assesment Covid-19 sebelum masuk kantor!</p>

                </div>
            </div>
        </div>
    </div>

-->


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
                                    Report History Assesment Covid-19
                                </h4>

                                <a href="/dashboard/formhistory" type="button" class="btn btn-outline-success mt-2"
                                    style="width: 80%;">Check</a>
                                <br><br>
                            </div>
                        </div>
                        <div class="card ">
                            <img class="card-img-top img-fluid ml-auto mr-auto mt-1" src="/image/temperature.png"
                                alt="Card image cap" style="width: 130px;">
                            <div class="card-body">
                                <h4 class="mt-2">
                                    Report Temperature Record
                                </h4>
                                <a href="/dashboard/temperature" type="button" class="btn btn-outline-success"
                                    style="width: 80%; margin-top:32px;">Check</a>
                                <br><br>
                            </div>
                        </div>
                        <div class="card ">
                            <img class="card-img-top img-fluid ml-auto mr-auto" src="/image/userlist.png"
                                alt="Card image cap" style="width: 180px;">
                            <div class="card-body">
                                <h4 style="margin-top: 10px;">
                                    Report User List
                                </h4>
                                <a href="/dashboard/userlist" type="button" class="btn btn-outline-success"
                                    style="width: 80%; margin-top:45px;">Check</a>
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
