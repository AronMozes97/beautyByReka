<nav class="navbar {{--fixed-top--}} navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('img/logo1.png') }}" style="margin-left: 5%" alt="...">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cosmetic') }}">Kozmetika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('makeupTattoo') }}">Sminktetoválás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('makeup') }}">Smink</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('price_list') }}">Árjegyzék</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reservation') }}">Időpontfoglalás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">Kapcsolat</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
