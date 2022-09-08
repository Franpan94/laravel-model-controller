@extends('layouts.main')

@section('main-content')
    <div class="container-fluid ms_bg_page ms_color">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-2 m-3 text-white pt-5 pb-5">
                    <img src="{{ $movie->post }}" alt="{{ $movie->title }}" class="img-fluid">
                    <h3>Titolo: {{ $movie->title }}</h3>
                    <h4>Lingua: {{ $movie->nationality }}</h4>
                    <h5>Data di uscita: {{ $movie->date }}</h5>
                    <h6>Voto: {{ $movie->vote }}</h6>
                </div>
            @endforeach
        </div>




    </div>
@endsection
