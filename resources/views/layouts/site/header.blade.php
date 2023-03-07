<header id="site-header">
    <div id="header-logo">
        <a href="{{ route('siteIndex') }}">
            <img src="{{ asset('site/img/lampada.png') }}" alt="Logo Raio">
        </a>
    </div>
    <div id="header-busca">
        <div>
            <a href="">
                home
            </a>
        </div>
        <div>
            <a href="">
                contato
            </a>
        </div>
        <form class="search" action="">
            <input type="text">
            <button type="submit">
                <span class="material-symbols-outlined">
                    search
                </span>
            </button>
        </form>
    </div>
</header>
