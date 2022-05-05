@extends('layouts.app')

@section('main-content')

<div id="jumbotron"></div>

<div>
    <div class="comic">
      <div class="comic-top">
        <div class="my-container">
          <div class="img-card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
            <span class="type">{{$comic['type']}}</span>
            <span class="gallery">view gallery</span>
            </div>
        </div>
      </div>
      <div class="my-container">
        <div class="comic-main">

          <div class="comic-description">
          <h1>{{ $comic['title']}}</h1>
          <p>{{ $comic['price']}}</p>
          <p>{{ $comic['description']}}</p>
        </div>

        <div class="advertisement">
          <p>advertisement</p>
          <img src="{{asset("assets/images/adv.jpg")}}" alt="{{$comic['title']}}" />
        </div>

        </div>
    
        <div class="comic-details">
          <div class="talent">
            <div class="art">
              <h5>Art by:</h5>
              @foreach ($comic['artists'] as $index => $artist)
                 @if (!$loop->last)
                    {{$artist.', '}}  
                  @endif
                    {{$artist}}
              @endforeach
            </div>
            <div class="written">
              <h5>Written by:</h5>
              @foreach ($comic['writers'] as $index => $writer)
                 @if (!$loop->last)
                    {{$writer.', '}}  
                  @endif
                    {{$writer}}
              @endforeach
            </div>
          </div>
          <div class="Specs">
            <div class="series">
              <h5>Series</h5>
              <p>{{$comic['series']}}</p>
            </div>
            <div class="price">
              <h5>U.S Price:</h5>
              <p>{{$comic['price']}}</p>
            </div>
            <div class="sale-date">
              <h5>On Sale Date:</h5>
              <p>{{$comic['sale_date']}}</p>
            </div>
          </div>
        </div>
    
      </div>
    </div>
</div>
     @dump($comic)
@endsection