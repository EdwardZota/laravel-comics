<footer>
    <nav class="box">
        @foreach ($footerList as $footerListItem)
        <ul class="section">
            <li>
                <h3>{{ $footerListItem['title'] }}</h3>
                <ul>
                    @foreach ($footerListItem['links'] as $footerListLink)
                        <li>
                            <a href="#">{{$footerListLink}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
        @endforeach
    </nav>
    <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="Logo DC">
</footer>

<div class="container lower-footer">
    <div class="box">
        <div>
            <button>SING-UP NOW</button>
        </div>
        <nav>
            <ul>
                <h3>FOLLOW US</h3>
                @foreach ($socialList as $social)
                    <li>
                        <a href="{{$social['href']}}"><img src="{{Vite::asset('resources/img'.$social['img'].'')}}" alt="{{$social['name']}}"></a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
