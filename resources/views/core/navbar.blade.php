<nav class="navbar {{--fixed-top--}} navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" width="120" height="40" style="margin-left: 5%"></a>
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
                    <a class="nav-link" href="{{ route('contacts') }}">Kapcsolatok</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
