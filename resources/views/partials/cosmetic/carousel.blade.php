@php
    $images = [
        'AHA savas kúra.',
        'AHA savas kúra',
        'Hycdroglow beauty',
        'Hydroglow anti-age és rf kúra..',
        'Hydroglow anti-age és rf kúra.',
        'Hydroglow anti-age és rf kúra',
        'Hydroglow anti-age 1 alkalom',
        'Hydroglow mélytisztítás és AHA kúra.',
        'Hydroglow mélytisztítás és AHA kúra',
    ];

    $text = [
        'AHA savas kúra',
        'AHA savas kúra',
        'Hycdroglow beauty',
        'Hydroglow anti-age és rf kúra',
        'Hydroglow anti-age és rf kúra',
        'Hydroglow anti-age és rf kúra',
        'Hydroglow anti-age 1 alkalom',
        'Hydroglow mélytisztítás és AHA kúra',
        'Hydroglow mélytisztítás és AHA kúra',
    ];

@endphp



<div id="cosmeticCarousel" class="carousel slide cosmetic" data-bs-ride="carousel">
        @foreach($text as $i => $t)
            <div class="carousel-caption-container {{ $i == 0 ? 'active' : '' }}" id="caption-{{ $i }}">
                <h4>{{ $t }}</h4>
            </div>
        @endforeach
    <div class="carousel-indicators">
        @for($i = 1; $i < 10; $i++)
            <button type="button" data-bs-target="#cosmeticCarousel" data-bs-slide-to="{{ $i - 1 }}"
                    class="{{ $i == 1 ? 'active' : '' }} other" aria-current="{{ $i == 1 ? 'true' : 'false' }}" aria-label="Slide {{ $i }}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @foreach($images as $i => $image)
            <div class="carousel-item {{ $i == 1 ? "active" : "" }}">
                <img src="{{ asset('img/cosmetic-carusel/'.$image.'.png') }}" class="d-block w-100" alt="...">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#cosmeticCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cosmeticCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
