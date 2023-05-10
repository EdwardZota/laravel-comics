<header>
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
        </div>
        <nav>
            <ul>
                @foreach ($navList as $navItem)
                    <li>
                        <a class="{{$navItem['text']=='comics'?'text-primary':''}}" href="{{$navItem['href']}}">{{$navItem['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

</header>
