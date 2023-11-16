<section class="mainmenu bg-mainmenu">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-mainmenu">
            {{-- <div class="container-fluid"> --}}
                {{-- <a class="navbar-brand" href="#">Home</a> --}}
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="menu navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($menus as $menu)
                          <x-main-sub-menu :menu="$menu"/>
                    @endforeach
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-muted" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            {{-- </div> --}}
        </nav>
    </div>
</section>