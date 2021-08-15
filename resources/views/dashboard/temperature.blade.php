<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Temperature Check')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')



<div class="mt-4" style="height: auto;">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Button trigger modal -->



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Masukkan Temperatur Suhu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <p class="mt-4 text-center">Tanggal : <strong><span id="tanggal"></span></strong></p>

                            <div class="form-group">
                                <label for="inputNama">Nama</label>
                                <input type="text" class="form-control" id="inputNama">
                            </div>
                            <div class="form-group">
                                <label for="inputSuhu">Suhu</label>
                                <input type="text" class="form-control" id="inputSuhu">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3 mr-auto ml-auto" style="width: 80%;">
            <button align="center" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"
                style="margin: 10px 10px 10px 10px">
                Temperature Record
            </button>
            <div class="bg-white border-b border-gray-200">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col" style="width: 10%;">Tanggal</th>
                                <th scope="col">Nama</th>
                                <th scope="col" style="width: 10%;">Suhu</th>
                                <th scope="col" style="width: 10%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp

                            <tr class="text-center">
                                <th scope="row">{{ $no++ }}</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>

                                    <button type="button" class="btn btn-danger">Delete</button>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection
