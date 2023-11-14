@extends('core.html')
@section('body')
    <h2 class="h2">
        Szemöldöktetoválás
    </h2>

    <div class="row index custom-container">
        <div class="col-8 index text-start">
            @include('partials.makeupTattoo.text1')
        </div>
        <div class="col-4 index makeupTattoo">
            <img src="{{ asset('img/sminkTattoo/sminkTattoo.jpg') }}" alt="placeholder"
                 width="400" height="329">
        </div>
    </div>

    <hr>

    <div class="col makeupTattoo">
        <p class="custom makeupTattoo text">
            Egy igényesen megtervezett, majd kivitelezett szemöldök nem csak
            magabiztosságot ad, hanem rengeteg időt is spórolhatunk vele a
            hétköznapokban, nem kell aggódnunk, hogy szemöldökünk elkenődik akár
            strandolás vagy sportolás közben.
        </p>
    </div>

    <hr>

    <h2 class="h2">
        Választható technikák
    </h2>

    <div class="row index custom-container">
        <div class="col-8 index text-start">
            @include('partials.makeupTattoo.text2')
        </div>
        <div class="col-4 index makeupTattoo before-after">
            <img src="{{ asset('img/sminkTattoo/before_after_1.jpg') }}" alt="placeholder"
                 width="auto" height="450">
        </div>
    </div>

    <div class="row-makeupTattoo before-after">
        <img class="l" src="{{ asset('img/sminkTattoo/1_1.jpg') }}" alt="placeholder"
             width="auto" height="250">
        <img class="r" src="{{ asset('img/sminkTattoo/1_2.jpg') }}" alt="placeholder"
             width="auto" height="250">
    </div>

    <hr>

    <div class="row index custom-container">
        <div class="col-8 index text-start">
            @include('partials.makeupTattoo.text3')
        </div>
        <div class="col-4 index makeupTattoo before-after">
            <img src="{{ asset('img/sminkTattoo/before_after_2.PNG') }}" alt="placeholder"
                 width="auto" height="450">
        </div>
    </div>

    <div class="row-makeupTattoo before-after">
        <img class="l" src="{{ asset('img/sminkTattoo/2_1.jpg') }}" alt="placeholder"
             width="auto" height="250">
        <img class="r" src="{{ asset('img/sminkTattoo/2_2.jpg') }}" alt="placeholder"
             width="auto" height="250">
    </div>

    <hr>

    <h2 class="h2">
        A tetoválás lépései
    </h2>

    <div class="col makeupTattoo">
        @include('partials.makeupTattoo.text4')
    </div>

    <hr>

    <h2 class="h2">
        Árlista
    </h2>

    <table class="table">
        <tbody>
        @foreach($tattoo as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->features }}
                    </div>
                </td>
                <td class="table-price-row tattoo">
                    <div class="table-price">
                        {{ date('Y-m-d', strtotime(now())) < '2024-01-31'
                            ? "45000*"
                            : $item->price
                        }}

                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                    <div class="table-price price-list" style="margin-right: 20px;">
                        {{ date('Y-m-d', strtotime(now())) < '2024-01-31'
                            ? "2024.01.31-ig"
                            : ""
                        }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! date('Y-m-d', strtotime(now())) < '2024-01-31'
        ? '<p class="page-text">
                *2024.02.01-től <b>60000 Ft</b>
           </p>'
        : ''
     !!}

    <p class="page-text">
        Az ár tartalmazza az első korrekció összegét is, amelyet 1-3 hónapon belül
        kell elvégezni. 3 hónapon túl a teljes ár kerül felszámolásra!
        További korrekció 20.000 Ft / alkalom.
    </p>
    <p class="page-text">
        2 éven belüli frissítésre 30% kedvezményt adok a teljes árból!
    </p>

@endsection
