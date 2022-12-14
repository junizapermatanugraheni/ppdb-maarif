<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #01762f">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo.jpg" alt="Logo" width="240" height="auto" class="d-inline-block align-text-middle">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav justify-content-end">
            <li class="nav-item ">
                <a class="nav-link fw-bolder text-white {{ ($title === 'Home') ? 'active' : '' }}" href="/" style="font-size: 13px; background-color: primary">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold text-white {{ ($title === 'Petunjuk') ? 'active' : '' }}" href="/instruction" style="font-size: 13px">PETUNJUK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold text-white {{ ($title === 'Informasi') ? 'active' : '' }}" href="/info" style="font-size: 13px">INFORMASI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold text-white {{ ($title === 'Pengumuman') ? 'active' : '' }}" href="/announ" style="font-size: 13px">PENGUMUMAN</a>
            </li>
        </ul>
    </div>
</nav>
