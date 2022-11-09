@extends('template')

@section('title', 'GSLC 2')

@section('content')
    <div style="height: 465px">
        <div class="d-flex">
        <p class="card-num text-white">Menu {{ $i = 0 }}</p>
        @foreach ($productData as $item)
            @if ($i == 0)
                <div class="card bg-dark text-white text-center" style="width: 18rem;">
                    <div class="card-body">
                        <p> Menu {{ $i = $i + 1 }} </p>
                        <img class="card-img" src="{{ $item->foodImageUrl }}" alt="Card Image">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->price }}</p>
                    </div>
                </div>
            @elseif ($i < 6 && $i > 0)
                <div class="card bg-dark text-white text-center" style="width: 18rem;">
                    <div class="card-body">
                        <p> Menu {{ $i = $i + 1 }} </p>
                        <img class="card-img" src="{{ $item->foodImageUrl }}" alt="Card Image">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->price }}</p>
                    </div>
                </div>
            @elseif ($i == 6)
                <div class="card bg-dark text-white text-center" style="width: 18rem;">
                    <div class="card-body">
                        <p> menu terakhir</p>
                        <img class="card-img" src="{{ $item->foodImageUrl }}" alt="Card Image">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->price }}</p>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection
