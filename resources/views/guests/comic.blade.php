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
        <div class="comic-main">
          <div class="comic-main-top">
                <div class="comic-description">
                <h1>{{ $comic['title']}}</h1>
                <div class="price">
                  <div class="price-left">
                      <p>U.S. Price: {{ $comic['price']}}</p>
                      <span>available</span>
                  </div>
                  <span class="price-right">Check Availability</span>
                </div>

                <p>{{ $comic['description']}}</p>
                </div>
              <div class="advertisement">
                <p>advertisement</p>
                <img src="{{asset("assets/images/adv.jpg")}}" alt="{{$comic['title']}}" />
              </div>
          </div>
            
            
        </div>
        <div class="comic-details">
          <div class="talent">
            <h5>Talent</h5>
            <div class="art">
              <span class="span-left">Art by:</span>
              <span class="span-right">
                  @foreach ($comic['artists'] as $index => $artist)
                  @if (!$loop->last)
                    {{$artist.', '}}  
                  @endif
                    {{$artist}}
                  @endforeach
              </span>
            </div>
            <div class="written">
              <span class="span-left">Written by:</span>
              <span class="span-right">
                @foreach ($comic['writers'] as $index => $writer)
                 @if (!$loop->last)
                    {{$writer.', '}}  
                  @endif
                    {{$writer}}
              @endforeach
              </span>
            </div>
          </div>
          <div class="specs">
            <h5>Specs</h5>
            <div class="series">
              <span class="span-left">Series</span>
              <span class="span-right">{{$comic['series']}}</span>
            </div>
            <div class="price">
              <span class="span-left">U.S Price:</span>
              <span class="span-right">{{$comic['price']}}</span>
            </div>
            <div class="sale-date">
              <span class="span-left">On Sale Date:</span>
              <span class="span-right">{{$comic['sale_date']}}</span>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection