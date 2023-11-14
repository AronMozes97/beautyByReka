@extends('core.html')
@section('body')
    @for($i = 1; $i < 10; $i++)
        <div class="row index custom-container cosmetic">
            @if($i % 2 == 0)
                <div class="col-8 index text-start cosmetic">
                    @include('partials.cosmetic.' . $i)
                </div>
                <div class="col-4 index cosmetic-end cosmetic">
                    <img src="{{ asset('img/cosmetic-img/'. $i . '.jpg') }}" alt="placeholder"
                         width="350" height="400">
                </div>
            @else
                <div class="col-4 index cosmetic-start cosmetic">
                    <img src="{{ asset('img/cosmetic-img/'. $i . '.jpg')  }}" alt="placeholder"
                         width="350" height="400">
                </div>
                <div class="col-8 index text-start cosmetic">
                    @include('partials.cosmetic.' . $i)
                </div>
            @endif
        </div>

        <hr>
    @endfor

    <h2 class="h2">
        Munkáim
    </h2>

    @include('partials.cosmetic.carousel')

    <br>
    <br>
    <br>
    <br>
@endsection
