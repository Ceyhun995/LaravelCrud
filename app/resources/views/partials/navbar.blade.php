<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto"> <!-- 'ms-auto' sınıfı 'ml-auto' ile değiştirildi -->
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="/">Ana Sayfa</a>
                </li>
                <li class="nav-item {{request()->is('products') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('products')}}" if>Ürünler</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        User
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{route('adminpanel')}}"> Admin Panel</a></li>
                        <li><a class="dropdown-item" href="/">Kullanıcı Ayarları</a></li>
                        <li><a class="dropdown-item" href="#">Çıkış</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
