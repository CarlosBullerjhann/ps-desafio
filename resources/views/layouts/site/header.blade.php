<header id="site-header">
    <div id="header-logo">
        <a href="{{ route('siteIndex') }}">
            <img src="{{ asset('site/img/lampada.png') }}" alt="Logo Raio">
            <p>Carlos Eletrônica</p>
        </a>
    </div>
    <div id="header-busca">
        <div id="dark-mode">
            <label for="">Dark-Mode</label>
            <input type="checkbox" id="switch">
        </div>
        <form class="search" action="{{ route('siteFind') }}">
            <input type="text" id="search" name="search">
            <button type="submit">
                <span class="material-symbols-outlined">
                    search
                </span>
            </button>
        </form>
    </div>
</header>
<hr>
