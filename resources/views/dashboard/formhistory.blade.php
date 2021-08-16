<!-- Menghubungkan dengan view template master -->
@extends('layout.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'History Assesment')

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
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Pertanyaan 1</th>
                                <th scope="col">Pertanyaan 2</th>
                                <th scope="col">Pertanyaan 3</th>
                                <th scope="col">Pertanyaan 4</th>
                                <th scope="col">Pertanyaan 5</th>
                                <th scope="col">Pertanyaan 6</th>
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
                            </tr>
                            @endforeach
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection

