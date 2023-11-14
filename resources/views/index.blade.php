@extends('core.html')
@section('body')
    <div class="row index custom-container">
        <div class="col-8 index text-start">
            @include('partials.index.bio')
        </div>
        <div class="col-4 index">
            <img src="{{ asset('img/bio.jpg') }}" alt="placeholder"
                 width="350" height="450">
        </div>
    </div>

    <hr>

    <h2 class="h2">Szolgáltatások</h2>

    <div class="row index custom-container services">
        <div class="col text-center services">
            <a href="{{ route('cosmetic') }}">
                <img class="services" src="{{ asset('img/kozmetika.jpg') }}" alt="placeholder">
                <h4>Kozmetika</h4>
            </a>
        </div>

        <div class="col text-center services">
            <a href="{{ route('makeupTattoo') }}">
                <img class="services" src="{{ asset('img/sminktetovalas.jpg') }}" alt="placeholder">
                <h4>Sminktetoválás</h4>
            </a>
        </div>
        <div class="col text-center services">
            <a href="{{ route('makeup') }}">
                <img class="services" src="{{ asset('img/smink.jpg') }}" alt="placeholder">
                <h4>Smink</h4>
            </a>
        </div>
    </div>
    <br>
@endsection
