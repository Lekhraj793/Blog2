<nav class="nav d-flex justify-content-between">
<!-- <div class="flex-center position-ref full-height"> -->
    @if (Route::has('login'))
        <div class="top-right links" style="width:100%;">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
</nav>
