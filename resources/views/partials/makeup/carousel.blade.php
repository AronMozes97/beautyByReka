<div id="makeupCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @for($i = 1; $i < 10; $i++)
            <button type="button" data-bs-target="#makeupCarousel" data-bs-slide-to="{{ $i - 1 }}"
                    class="{{ $i == 1 ? 'active' : '' }} other" aria-current="{{ $i == 1 ? 'true' : 'false' }}" aria-label="Slide {{ $i }}"></button>
        @endfor
    </div>
    <div class="carousel-inner">
        @for($i = 1; $i < 10; $i++)
            <div class="carousel-item {{ $i == 1 ? "active" : "" }}">
                <img src="{{ asset('img/makeup-carusel/'.$i.'.png') }}" class="d-block w-100" alt="...">
            </div>
        @endfor
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#makeupCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#makeupCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
