<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Form Assesment')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="container mt-5">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" style="color: #6FA74C;">
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
                                            didapatkan suhu ≥ 37,3°C agar dilakukan investigasi dan pemeriksaan
                                            petugas
                                            kesehatan. Jika sudah
                                            dipastikan tidak memenuhi kriteria OTG, ODP atau PDP, karyawan dapat
                                            masuk ke area
                                            kantor. </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container my-1">
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <form action="" method="POST">

                                <div class="py-2 h5"><b>1. Apakah pernah keluar rumah/ tempat umum (pasar, fasyankes,
                                        kerumunan orang, dan
                                        lain lain)?</b></div>
                                <div id="options">
                                    <label class="options">Ya <input type="radio" name="quest_one" value="Ya"> <span
                                            class="checkmark"></span> </label>
                                    <label class="options">Tidak <input type="radio" name="quest_one" value="Tidak">
                                        <span class="checkmark"></span> </label>
                                </div>
                                <div class="d-flex align-items-center pt-3">
                                    <div class="ml-auto mr-sm-1"> <a type="submit" href="/formquest/formdua"
                                            class="btn btn-success">Next</a> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
