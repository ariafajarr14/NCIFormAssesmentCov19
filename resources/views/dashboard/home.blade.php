<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Home')

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
                <div class="container mt-5 text-center">
                    <div class="card ml-auto mr-auto" style="width: 28rem;">
                        <img class="card-img-top ml-auto mr-auto" src="/image/formicon.png" alt="Card image cap"
                            style="width: 140px;margin-top:-50px;">
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
                            style="position:absolute; width: 120px; font-size: 12px; margin-left: 15px; margin-top: 10px;">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            Baca Instrument
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Baca Instrument Sebelum
                                            Mengisi Form !</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" align="left">
                                        <p>Silahkan pilih salah satu jawaban yang paling sesuai dengan kondisi Anda
                                            secara JUJUR dan
                                            TERBUKA.</p>
                                        <ul>
                                            <li>Untuk nomor 1-4 , jika menjawab "Ya" diberi poin 1</li>
                                            <li>Untuk nomor 5-6, jika menjawab "Ya" diberi poin 5</li>
                                        </ul>

                                        <p>
                                            Hasil total keseluruhan akan dinilai, dan nilai rentang adalah sebagai
                                            berikut :
                                            <ul>
                                                <li>0 = Risiko Kecil</li>
                                                <li>1-4 = Risiko Sedang</li>
                                                <li>> 5 = Risiko Besar </li>
                                            </ul>
                                        </p>

                                        <p>
                                            TINDAK LANJUT:
                                        </p>
                                        <ul>
                                            <li>Risiko besar, agar dilakukan investigasi dan tidak diperkenankan
                                                masuk ke area
                                                kantor. Karyawan dengan risiko
                                                besar dilakukan pemeriksaan Antigen / PCR.</li>
                                            <li>Risiko kecil - sedang, dilakukan pemeriksaan suhu di pintu masuk.
                                                Apabila
                                                didapatkan suhu ??? 37,3??C agar dilakukan investigasi dan pemeriksaan
                                                petugas
                                                kesehatan. Jika sudah
                                                dipastikan tidak memenuhi kriteria OTG, ODP atau PDP, karyawan dapat
                                                masuk ke area
                                                kantor. </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tutup Modal -->

                        <div class="card-body">
                            <h4>
                                Form Assesment Covid-19
                            </h4>
                            <p class="mt-4"><i class="fa fa-calendar-o" aria-hidden="true"></i> : <span
                                    id="tanggal"></span></p>

                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalSuhu"
                                style=" width: 150px; font-size: 20px; margin-top: 10px;">
                                Isi Form
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalSuhu" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog vertical-align-center">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalSuhu">Masukkan terlebih dahulu suhu
                                                tubuh Anda !</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" align="left">
                                            <form method="POST" action="{{route('temperature.create')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="number" step="00.01" min="36.01" class="form-control" id="inputSuhu" name="suhu"
                                                        placeholder="36,01" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success"
                                                        onclick="return confirm('Apakah Anda yakin mengisi suhu tersebut dengan sesuai ?')">Next</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tutup Modal -->
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <br>

@endsection
