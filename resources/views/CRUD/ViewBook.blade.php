@extends('layouts.app')

@section('content')
<marquee style="max-width: 540px; margin-left: 32.5%"><a href="{{Route('ViewAll')}}">Click Me to Return</a></marquee>
    <div class="row justify-content-center">
        <div class="card mb-3" style="max-width: 540px; border-radius:15px" >
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{('/storage/'.$book->image)}}"  alt="..." height="180px" width="200px" style="border-radius: 15px">
              </div>
              <div class="col-md-8">
                <div class="card-body" style="margin-left: 10px">
                    <h3 class="card-title">{{$book->nama}} - ({{$book->penulis}})</h3>
                    <p class="card-text">Harga: Rp.{{($book->harga)}},00</p>
                    <p class="card-text">Stock: {{($book->stock)}} Qty</p>
                    <p class="card-text">Category:
                        @foreach ($book->category as $category)
                            @if ($loop->last)
                                {{$category->category_name}}
                            @else
                                {{$category->category_name}},
                            @endif
                        @endforeach
                    </p>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
