@extends('layouts.layoutPrincipal')

@section('page-title','Character')


@section('content')
    <div class="container artists-list">
        <div class="row">
            <ul>
                @foreach ($seriesList as $SerieItem)
                    <li>
                        <h3>{{$SerieItem['title']}}</h3>
                        <div class="artisti">
                            <h5>Artists</h5>
                                @foreach ($SerieItem['artists'] as $artist)
                                    <span>{{$artist}},</span>
                                @endforeach
                        </div>
                        <div class="scrittori">
                            <h5>Scrittori</h5>
                                @foreach ($SerieItem['writers'] as $writer)
                                    <span>{{$writer}},</span>
                                @endforeach
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
@endsection
