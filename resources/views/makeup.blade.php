@extends('core.html')
@section('body')

    <div class="row index custom-container">
        <div class="col-8 index text-start">
            @include('partials.makeup.bio')
        </div>
        <div class="col-4 index">
            <img src="{{ asset('img/makeup_1.jpg') }}" alt="placeholder"
                 width="350" height="450">
        </div>
    </div>

    <hr>

    <h2 class="h2">
        Munkáim
    </h2>

    @include('partials.makeup.carousel')

    <hr>

    <h2 class="h2">
        Árlista
    </h2>

    <table class="table">
        <tbody>
        @foreach($makeups as $makeup)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $makeup->name }}
                    </div>
                    <div class="table-features">
                        {{ $makeup->features }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $makeup->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="page-text">
        <p style="margin-bottom: 0">Kiszállási díjjal / Csoportos kedvezménnyel kapcsolatban kérlek vedd fel velem a
            kapcsolatot!</p>
        <p>Kiszállást csak Pest megyén belül, minimum menyasszony + 3 fő sminkelésétől vállalok.</p>
    </div>

    <hr>

    <h2 class="h2"> Kapcsolatfelvétel</h2>

    @include('partials.makeup.form')

    <div class="page-text">
        <p style="margin-bottom: 3%; margin-top: 1%;">Árajánlat / Kérdés esetén kérlek vedd fel velem a kapcsolatot!</p>
    </div>

@endsection
