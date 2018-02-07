 <nav class="navbar p-b-10" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
        <a href="{{ url('/') }}" class="navbar-item">
            <img class="m-r-20 m-l-10" src="{{ asset('images/logogreja.png') }}" alt="Logo Gereja">FA Bethany Manado
        </a>
    </div>

        

    <div class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item is-tab">
                <a href="{{ url('/member') }}">Jemaat</a>
            </div>

            <div class="navbar-item is-tab">
                <a href="{{ url('/leader') }}">Gembala</a>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                Komunitas
                </a>

                <div class="navbar-dropdown">
                    <a href="{{ url('area') }}" class="navbar-item">Wilayah FA</a>
                    <a href="{{ url('district') }}" class="navbar-item">Rayon FA</a>
                    <a href="{{ url('family') }}" class="navbar-item">Family Altar</a>
                  </div>
            </div>

        </div>
    
    </div>
    

    @auth
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a href="#" class="navbar-link">
                    Halo, {{ Auth::user()->name }}
                </a>

                <div class="navbar-dropdown">
                    <a href="#" class="navbar-item">Profile</a>
                    <a href="#" class="navbar-item">Pengaturan</a>
                    <a href="#" class="navbar-item">Pesan</a>
                    <hr class="navbar-divider">
                    <a href="#" class="navbar-item">Logout</a>
                </div>
            </div>
        </div>
    @else
        <div class="navbar-end">
            <a href="{{ route('login') }}" class="navbar-item">Login</a>
            <a href="{{ route('register') }}" class="navbar-item">Daftar</a>
        </div>
    @endauth
</nav>
