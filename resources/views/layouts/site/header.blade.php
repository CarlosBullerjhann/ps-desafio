<header id="site-header">
    <div id="header-logo">
        <a href="{{ route('siteIndex') }}">
            <img src="{{ asset('site/img/lampada.png') }}" alt="Logo Raio">
        </a>
    </div>
    <div id="header-busca">
        <div>
            <a class="btn-header" href="{{ route('siteIndex') }}">
                home
            </a>
        </div>
        <div>
            <button class="btn-header" onclick="scrooll('site-footer')">
                contatos
            </button>
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
