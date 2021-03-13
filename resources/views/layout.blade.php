<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link
            href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900"
            rel="stylesheet"
        />
        <link href="/css/default.css" rel="stylesheet" />
        <link href="/css/fonts.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />

        @yield('head')
    </head>
    <body>
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="/">SimpleWork</a></h1>
                </div>

                
                <div id="menu">
                    <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"
                        >
                            <a href="/" accesskey="1" title="">Homepage</a>
                        </li>
                        
                        <li
                            class="{{ Request::is('about') ? 'current_page_item' : '' }}"
                        >
                            <a href="/about" accesskey="3" title="">About Us</a>
                        </li>
                        <li
                            class="{{ Request::path() === 'articles' ? 'current_page_item' : '' }}"
                        >
                            <a href="/articles" accesskey="4" title=""
                                >Articles</a
                            >
                        </li>
                        <li
                            class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"
                        >
                            <a href="/contact" accesskey="5" title="">Contact Us</a>
                        </li>
                    @guest
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
               
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="margin: 0; padding: 0;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>

            @yield('header_featured')
        </div>

        @yield('content')

        <div id="footer-wrapper">
            <div id="copyright" class="container">
                <p>
                    &copy; Untitled. All rights reserved. | Photos by
                    <a href="http://fotogrph.com/">Fotogrph</a> | Design by
                    <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.
                </p>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
