<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">GetLaw</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('konsultasi.create') }}">Konsultasi Hukum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bantuan.form') }}">Bantuan Hukum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sumberdaya.index') }}">Sumber Daya Hukum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('lembaga.index') }}">Lembaga Hukum</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

