<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Form Assesment')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')



<form method="post" action="{{route('form.create')}}">
    @csrf
    <p class="mt-4 text-center">Tanggal : <strong><span id="tanggal"></span></strong></p>
    <div class="container mt-4">
        <div class="py-12" style="margin-top: -80px;">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5"><b>1. Apakah pernah keluar rumah/ tempat umum (pasar, fasyankes,
                                        kerumunan orang, dan
                                        lain lain)?</b></div>
                                <div id="options">
                                    <label class="options">Ya <input type="radio" name="quest_one" value="Ya" required>
                                        <span class="checkmark"></span>

                                    </label>
                                    <label class="options">Tidak <input type="radio" name="quest_one" value="Tidak">
                                        <span class="checkmark"></span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5"><b>2. Apakah pernah menggunakan transportasi umum?</b></div>
                                <div id="options">
                                    <label class="options">Ya <input type="radio" name="quest_two" value="Ya" required>
                                        <span class="checkmark"></span> </label>
                                    <label class="options">Tidak <input type="radio" name="quest_two" value="Tidak">
                                        <span class="checkmark"></span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5"><b>3. Apakah pernah melakukan perjalanan ke luar
                                        kota/internasional?
                                        (wilayah yang terjangkit/zona merah)</b></div>
                                <div id="options">
                                    <label class="options">Ya <input type="radio" name="quest_three" value="Ya"
                                            required> <span class="checkmark"></span> </label>
                                    <label class="options">Tidak <input type="radio" name="quest_three" value="Tidak">
                                        <span class="checkmark"></span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5"><b>4. Apakah anda mengikuti kegiatan yang melibatkan orang
                                        banyak?</b>
                                </div>
                                <div id="options">
                                    <label class="options">Ya <input type="radio" name="quest_four" value="Ya" required>
                                        <span class="checkmark"></span> </label>
                                    <label class="options">Tidak <input type="radio" name="quest_four" value="Tidak">
                                        <span class="checkmark"></span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5"><b>5. Apakah memiliki riwayat kontak erat dengan orang yang
                                        dinyatakan
                                        ODP, PDP atau konfirm COVID-19 (berjabat tangan, berbicara, berada dalam satu
                                        ruangan/ satu rumah)?</b></div>
                                <div id="options">
                                    <label class="options">Ya <input type="radio" name="quest_five" value="Ya" required>
                                        <span class="checkmark"></span> </label>
                                    <label class="options">Tidak <input type="radio" name="quest_five" value="Tidak">
                                        <span class="checkmark"></span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="container my-1">
                            <div class="question ml-sm-5 pl-sm-5 pt-2">
                                <div class="py-2 h5"><b>6. Apakah pernah mengalami demam/ batuk/pilek/sakit
                                        tenggorokan/sesak/hilang indera penciuman dalam 14 hari terakhir?</b></div>
                                <div id="options">
                                    <label class="options">Ya <input type="radio" name="quest_six" value="Ya" required>
                                        <span class="checkmark"></span> </label>
                                    <label class="options">Tidak <input type="radio" name="quest_six" value="Tidak">
                                        <span class="checkmark"></span> </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrap mt-5">
                    <button type="submit" class="button">Submit</button>
                </div>

            </div>
        </div>
    </div>
</form>
@endsection
