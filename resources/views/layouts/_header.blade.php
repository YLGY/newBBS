<header class="header">
    <div class="header__logo header__item">
        <a href="{{ url('/') }}">
            newBBS
        </a>
    </div>
    <div class="header__right header__item">
        <ul class="header__nav">
            @guest
                <li class="header__list">
                    <a href="{{ route('login') }}" class="header__link">
                        Login
                    </a>
                </li>
                <li class="header__list">
                    <a href="{{ route('register') }}" class="header__link">
                        Register
                    </a>
                </li>
            @else
                <li class="header__list">
                    <a href="#" class="header__link">
                        <img src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" 
                            class="header__img" width="30px" height="30px"
                        >
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="header__list">
                    <a href="{{ route('logout') }}" class="header__link"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"   
                    >
                        Logout
                    </a>
                    <form action="{{ route('logout') }}" id="logout-form" style="display:none;" method="POST">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</header>