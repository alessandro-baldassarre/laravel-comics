@php
    $name = Route::currentRouteName();
@endphp

<div id="header">
    <div class="my-container">
      <div class="logo">
        <img src="{{asset("assets/images/dc-logo.png")}}" alt="dc logo" />
      </div>
      <div class="header-nav">
        <ul>
          <li>
            <a href="/">characters</a>
          </li>
          <li class="{{ ($name=="comics") ? 'active' : '' }}">
            <a href="{{route("comics")}}" >comics</a>
          </li>
          <li>
            <a href="/">movies</a>
          </li>
          <li>
            <a href="/">tv</a>
          </li>
          <li>
            <a href="/">games</a>
          </li>
          <li>
            <a href="/">collectibles</a>
          </li>
          <li>
            <a href="/">video</a>
          </li>
          <li>
            <a href="/">fans</a>
          </li>
          <li>
            <a href="/">news</a>
          </li>
          <li>
            <a href="/">shop</a>
          </li>
        </ul>
      </div>
    </div>
  </div>