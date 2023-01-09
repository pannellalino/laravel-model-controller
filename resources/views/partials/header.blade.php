<header class="text-center p-5">
    <nav>
        <ul class="d-flex justify-content-center">
            <li class="px-3 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="px-3 {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">
                <a href="{{ route('about') }}">About Us</a>
              </li>
              <li class="px-3 {{ Route::currentRouteName() === 'movies' ? 'active' : '' }}">
                <a href="{{ route('movies') }}">Movies</a>
              </li>
        </ul>
    </nav>
</header>
