@extends('core.html')
@section('body')

    <h1 class="h1">
        Arckezelések
    </h1>

    <table class="table">
        <tbody>
        @foreach($facials as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->features }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $item->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2 class="h2">
        Bérletek
    </h2>

    <table class="table">
        <tbody>
        @foreach($facialBundles as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->rental->name }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $item->rental->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <hr>

    <h1 class="h1">
        Gépi kezelések
    </h1>

    <table class="table">
        <tbody>
        @foreach($machineTreatments as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->features }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $item->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2 class="h2">
        Bérletek
    </h2>

    <table class="table">
        <tbody>
        @foreach($machineTreatmentBundles as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name}}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->rental->name  }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $item->rental->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        @foreach($bundleCombo as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item['name'] }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item['features'] }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $item['price'] }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <hr>

    <h1 class="h1">
        Sminktetoválás
    </h1>

    <table class="table">
        <tbody>
        @foreach($makeupTattoos as $item)
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

    <hr>

    <h1 class="h1">
        Smink
    </h1>

    <table class="table">
        <tbody>
        @foreach($makeups as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->features }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $item->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <hr>

    <h1 class="h1">
        Szempilla & Szemöldök
    </h1>

    <table class="table">
        <tbody>
        @foreach($eyebrow as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->features }}
                    </div>
                </td>
                <td class="table-price-row">
                    <div class="table-price">
                        {{ $item->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <hr>

    <h1 class="h1">
        Gyanta
    </h1>

    <table class="table">
        <tbody>
        @foreach($resin as $item)
            <tr class="table-row text-start hover">
                <td class="table-name-row">
                    <div class="table-name">
                        {{ $item->name }}
                    </div>
                    <div class="table-features price-list">
                        {{ $item->features }}
                    </div>
                </td>
                <td class="table-price-row resin">
                    <div class="table-price">
                        {{ $item->price }}
                        <span class="table-price ft">
                            Ft
                        </span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p class="page-text">
        A szalonban kézpénzes, illetve bankkártyás fizetésre is van lehetőség!
        <br>
        Bankkártyás fizetés esetén +2% tranzakciós díj kerül felszámolásra a teljes fizetendő összegre.
    </p>
    <hr>

@endsection
