<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow rounded">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo_1.jpg" alt="Logo" width="60" height="54" class="d-inline-block align-text-middle">
                SMK Ma'arif Wonosari
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Petunjuk') ? 'active' : '' }}" href="/instruction">Petunjuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Informasi') ? 'active' : '' }}" href="/info">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Pengumuman') ? 'active' : '' }}" href="/announ">Pengumuman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>