<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Report History Assesment')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')



<div class="mt-4" style="height: auto;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">{{$form_answers->links()}}<br>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white border-b border-gray-200">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center" style="color: #6FA74C ;">
                                <th scope="col" style="width:5%;">No</th>
                                <th scope="col" style="width:12%;">Tanggal</th>
                                <th scope="col" style="width:30%;">Nama</th>
                                <th scope="col" style="width:10%;">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#quest1Modal" style="font-size:13px;">
                                        Pertanyaan 1
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="quest1Modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color: #6FA74C;">
                                                    Apakah pernah keluar rumah/ tempat umum (pasar, fasyankes,
                                                    kerumunan orang, dan
                                                    lain lain)
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </th>
                                <th scope="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#quest2Modal"  style="font-size:13px;">
                                        Pertanyaan 2
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="quest2Modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color: #6FA74C;">
                                                    Apakah pernah menggunakan transportasi umum?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#quest3Modal"  style="font-size:13px;">
                                        Pertanyaan 3
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="quest3Modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color: #6FA74C;">
                                                    Apakah pernah melakukan perjalanan ke luar
                                                    kota/internasional?
                                                    (wilayah yang terjangkit/zona merah)
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#quest4Modal"  style="font-size:13px;">
                                        Pertanyaan 4
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="quest4Modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color: #6FA74C;">
                                                    Apakah anda mengikuti kegiatan yang melibatkan orang
                                                    banyak?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#quest5Modal"  style="font-size:13px;">
                                        Pertanyaan 5
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="quest5Modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color: #6FA74C;">
                                                    Apakah memiliki riwayat kontak erat dengan orang yang
                                                    dinyatakan
                                                    ODP, PDP atau konfirm COVID-19 (berjabat tangan, berbicara, berada
                                                    dalam satu
                                                    ruangan/ satu rumah)?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#quest6Modal"  style="font-size:13px;">
                                        Pertanyaan 6
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="quest6Modal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color: #6FA74C;">
                                                    Apakah pernah mengalami demam/ batuk/pilek/sakit
                                                    tenggorokan/sesak/hilang indera penciuman dalam 14 hari terakhir?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <th class="table-success " scope="col" style="width:5%;">Point</th>
                                <th class="text-light" scope="col" style="width:5%; background-color:#6FA74C">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($form_answers as $key => $form)
                            <tr class="text-center">
                                <th scope="row">{{ $form_answers->firstItem() + $key}}</th>
                                <td>{{$form->created_at}}</td>
                                <td>{{$form->clientname}}</td>
                                <td>{{$form->quest_one}}</td>
                                <td>{{$form->quest_two}}</td>
                                <td>{{$form->quest_three}}</td>
                                <td>{{$form->quest_four}}</td>
                                <td>{{$form->quest_five}}</td>
                                <td>{{$form->quest_six}}</td>
                                <td class="table-success" style="color:#6FA74C;"><strong>{{$form->hasil}}</strong></td>
                                <td class="text-light" style="background-color:#6FA74C;"><strong>{{$form->keterangan}}</strong></td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
