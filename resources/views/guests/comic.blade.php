@extends('layouts.app')

@section('main-content')

<div id="jumbotron"></div>

<div>
    <div class="products">
      <a id="current-button" href="#">current series</a>
      <div class="my-container">

            <div class="product-card">
                <div class="img-card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                </div>
                <h4>{{ $comic['series']}}</h4>
               
            </div>
 @dump($comic)
      </div>
    </div>
</div>
    
@endsection