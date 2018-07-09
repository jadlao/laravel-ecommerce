<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
  {{--  Nav header  --}}
  <header>
      <div class="wrapper">
        <a class="logo" href="/">Fashion E-commerce</a>
            <nav class="header-nav">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Shop</a>
                <a href="#">Contact</a>
            @guest
                <a href="/register">Register</a>
                <a href="/login">Login</a>
            @else
                <a href="/account">{{$user->name}}</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endguest
                <a class="cart" href="#">Cart</a>
            </nav>
      </div>
    </header>

    {{--  Content goes in here  --}}
    @yield('content')

    {{--  Footer  --}}
    <footer>
      <div class="footer-subscribe">
        <h4>Subscribe to our newsletter</h4>
        <input type="text" />
        <button type="submit">Subscribe</button>
      </div>
      <div class="footer-row">
        <ul class="footer-links">
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
        <ul class="footer-social">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Pinterest</a></li>
        </ul>
      </div>
      <div class="copyright">
        Copyright 2018. All rights reserved.
      </div>
    </footer>
  </body>
</html>


