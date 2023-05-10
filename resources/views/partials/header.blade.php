<header>
    <div class="container">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo"></a>

        </div>
        <nav>
            <ul>
                @foreach ($navList as $navItem)
                    <li>
                        <a class="{{$navItem['text'] == Route::currentRouteName()?'text-primary':''}}" href="http://127.0.0.1:8000{{$navItem['href']}}">{{$navItem['text']}}</a>
                        @if ($navItem['text']==Route::currentRouteName())
                            <div class="underline"></div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div id="jumbotron">
    </div>

</header>
