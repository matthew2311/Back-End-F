@extends('layouts.app')

@section('content')
@if ($datas->count() > 0)
<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="card">
            <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Penulis Buku</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stock</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- datas tinggal kalian ganti jadi books --}}
                    {{-- <?php $angka = 0; ?> --}}
                    @foreach ($datas as $book)
                    {{-- <?php $angka++ ;?> --}}
                    <tr>
                      <th>{{ $loop->iteration }} </th>
                      <td>{{ $book->nama}} </td>
                      <td>{{ $book->penulis}}</td>
                      <td>Rp. {{ $book->harga}}</td>
                      <td>{{ $book->stock}} Qty</td>
                      <td><a href="{{ route ('UpdateForm', $book->id) }} " class="btn-danger btn">UPDATE</a></td>
                      <td>
                            <form action="{{route('DeleteBuku', $book->id)}}" method="POST">
                                @csrf
                                @method('Delete')
                                <button type="submit" class="btn-danger btn">DELETE</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                  </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
    </div>
</div>
    <div class="text-center"> <h1>Tidak ada buku yang kamu buat</h1></div>
@endif
@endsection
