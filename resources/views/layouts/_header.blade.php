<header class="header">
    <div class="header__left">
        <div class="header__logo header__item">
            <a href="{{ url('/') }}">
                newBBS
            </a>
        </div>

        
    </div>
    
    <div class="header__nav--category">
        
        <ul class="header__nav">
            <li class="header__list 
                        {{ active_class(if_route('topics.index')) }}">
                <a href="{{ route('topics.index') }}" class="header__link">Topics</a>
            </li>
            <li class="header__list
                        {{ active_class(if_route('categories.show') && if_route_param('category', 1)) }}">
                <a href="{{ route('categories.show', 1) }}" class="header__link">Share</a>
            </li>
            <li class="header__list
                        {{ active_class(if_route('categories.show') && if_route_param('category', 2)) }}">
                <a href="{{ route('categories.show', 2) }}" class="header__link">Tutorial</a>
            </li>
            <li class="header__list
            {{ active_class(if_route('categories.show') && if_route_param('category', 3)) }}">
                <a href="{{ route('categories.show', 3) }}" class="header__link">Q&A</a>
            </li>
            <li class="header__list
            {{ active_class(if_route('categories.show') && if_route_param('category', 4)) }}">
                <a href="{{ route('categories.show', 4) }}" class="header__link">Notifications</a>
            </li>
        </ul>
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
                <a href="{{ route('topics.create') }}">
                        <span class="icon-plus header__link"></span>
                    </a>
                </li>
                <li class="header__list">
                    <a href="{{ route('notifications.index') }}">
                        <span class="header__notifications {{ Auth::user()->notification_count > 0 ? 'header__notifications-y' : '' }}">
                            {{ Auth::user()->notification_count }}
                        </span>
                    </a>
                </li>
                <li class="header__list">
                    <a href="{{ route('users.show', Auth::user()) }}" class="header__link">
                        <img src="{{ Auth::user()->avatar }}" 
                            class="header__img" width="30px" height="30px"
                        >
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="header__list">
                    <a href="{{ route('users.show', Auth::id()) }}" class="header__link">
                        Details
                    </a>
                </li>
                <li class="header__list">
                    <a href="{{ route('users.edit', Auth::id()) }}" class="header__link">
                        Edit
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