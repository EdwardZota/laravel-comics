@extends('layouts.layoutPrincipal')

@section('page-title','Comics')


@section('content')
<div class="series-list container">
    <span>CURRENT SERIES</span>
    <div id="Series">
        @foreach ($seriesList as $seriesItem)
            <div class="series-card">
                <img src="{{$seriesItem['thumb']}}" alt="{{$seriesItem['title']}}" alt="{{$seriesItem['title']}}">
                <h3>{{$seriesItem['title']}}</h3>
            </div>

        @endforeach
    </div>
    <div id="btn">
        <button>LOAD MORE</button>
    </div>
</div>
<div class="market-list">
    <div class="container">
        <div class="box">
            <ul>
                @foreach ($marketList as $marketItem)
                    <li>
                        <a href="{{$marketItem['href']}}"><img src="{{Vite::asset('resources/img'.$marketItem['img'].'')}}" alt="{{$marketItem['name']}}">
                        <span>{{ $marketItem['name']}}</span></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
