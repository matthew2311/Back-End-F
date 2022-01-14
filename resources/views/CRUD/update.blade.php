@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('Update', $buku->id) }}">
                        @csrf
                        @method('Patch')
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Buku') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" value="{{$buku->nama}}" class="form-control" name="nama" placeholder="Nama Buku">

                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penulis" class="col-md-4 col-form-label text-md-right">{{ __('Penulis Buku') }}</label>

                            <div class="col-md-6">
                                <input id="penulis" value="{{$buku->penulis}}" type="text" class="form-control" name="penulis" placeholder="Penulis Buku">

                                @error('penulis')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Buku') }}</label>

                            <div class="col-md-6">
                                <input id="harga" value="{{$buku->harga}}" type="number" class="form-control" name="harga" placeholder="Harga Buku">

                                @error('harga')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="number" value="{{$buku->stock}}" class="form-control" name="stock" placeholder="Stock Buku">
                                @error('stock')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
