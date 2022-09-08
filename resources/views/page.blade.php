@extends('layouts.main')

@section('main-content')
<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
         <div class="col-2 m-3">
            <h3>{{ $movie -> title }}</h3>
            <h4>{{ $movie -> nationality }}</h4>
            <h5>{{ $movie -> date }}</h5>
            <h6>{{ $movie -> vote }}</h6>
         </div>
        @endforeach
    </div>
    
    
        
    
</div>
@endsection