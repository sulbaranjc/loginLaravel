<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <!-- Condición para verificar si el usuario está verificado -->
    <div>
        <span class="dropdown-item-text">
            @if (Auth::user()->email_verified_at)
                Logged in as <strong>{{ Auth::user()->name }}</strong>
            @else
                Esperando verificación
            @endif
        </span>
    </div>
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
