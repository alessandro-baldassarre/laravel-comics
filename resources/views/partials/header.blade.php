@php
    $name = Route::currentRouteName();
@endphp

<div class="top-banner">
      <div class="my-container">
        <span>dc power™visa</span>
        <span>additional dc sites</span>
      </div>
</div>
<div id="header">
    
    <div class="my-container">
      <div class="logo">
        <a href="{{route('home')}}"><img src="{{asset("assets/images/dc-logo.png")}}" alt="dc logo" /></a> 
      </div>
      <div class="header-nav">
        <ul>
          <li class="{{ ($name=="characters") ? 'active' : '' }}">
            <a href="{{route('characters')}}">characters</a>
          </li>
          <li class="{{ ($name=="comics") ? 'active' : '' }}">
            <a href="{{route("comics")}}" >comics</a>
          </li>
          <li class="{{ ($name=="movies") ? 'active' : '' }}"> 
            <a href="{{route("movies")}}" >movies</a>
          </li>
          <li class="{{ ($name=="tv") ? 'active' : '' }}">
            <a href="{{route("tv")}}" >tv</a>
          </li>
          <li class="{{ ($name=="games") ? 'active' : '' }}">
            <a href="{{route("games")}}" >games</a>
          </li>
          <li class="{{ ($name=="collectibles") ? 'active' : '' }}">
            <a href="{{route("collectibles")}}" >collectibles</a>
          </li>
          <li class="{{ ($name=="video") ? 'active' : '' }}">
            <a href="{{route("video")}}" >video</a>
          </li>
          <li class="{{ ($name=="fans") ? 'active' : '' }}">
            <a href="{{route("fans")}}" >fans</a>
          </li>
          <li class="{{ ($name=="news") ? 'active' : '' }}">
            <a href="{{route("news")}}" >news</a>
          </li>
          <li class="{{ ($name=="shop") ? 'active' : '' }}">
            <a href="{{route("shop")}}" >shop</a>
          </li>
        </ul>
        <div class="search-bar">
          <input type="text" placeholder="Search">
          <img src="{{asset("assets/images/search.png")}}" alt="search icon">
        </div>
        
      </div>
    </div>
  </div>