<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', '')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <div class="container my-1">
                    <img src="/image/smileicon.png" class="img-fluid ml-auto mr-auto" style="width:150px;" alt="">
                    <div class="question ml-sm-5 pl-sm-5 pt-2">
                        <div class="py-2 h5 text-center" id="textthanks"><b>Thank's for your participation Today!
                                Stay Healthy!</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
