@extends('layouts.app')

@section('main-content')

<div id="jumbotron"></div>

<div>
    <div class="products">
      <a id="current-button" href="#">current series</a>
      <div class="my-container">
          @foreach ($comics as $element)
            <div class="product-card">
                <div class="img-card">
                <img src="{{$element['thumb']}}" alt="{{$element['title']}}" />
                </div>
                <h4>{{ $element['series']}}</h4>
            </div>
          @endforeach
        
        <a id="load-more" href="#">load more</a>
      </div>
    </div>
  </div>
    
@endsection