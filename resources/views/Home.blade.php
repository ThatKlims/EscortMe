@extends('layouts.CoreLayout')

@section('content')
<!-- header -->
<header class = "headers" id = "header">
    <div class = "head-top">
        <div class = "site-name">
        </div>
        <div class = "site-nav">
            <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
        </div>
    </div>

    <div class = "head-bottom flex">
        <h2>YOU GOT MONEY WE GOT ESCORTS</h2>
        <p>Use incognito mode</p>
    </div>
</header>
<!-- end of header -->



<!-- side navbar -->
<div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>
    <div class="flex items-center justify-center h-20 shadow-md">
        <img class="text-3xl uppercase text-indigo-500 logo" src="{{asset('images/logo.png')}}">
    </div>
            <ul class="flex flex-col py-4">
                <li>
                    <a href="#header" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#rules" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-book"></i></span>
                        <span class="text-sm font-medium">rules</span>
                    </a>
                </li>
                <li>
                    <a href="#Escort preview" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-shopping-bag"></i></span>
                        <span class="text-sm font-medium">Escorts</span>
                    </a>
                </li>



    @if (Route::has('login'))
        @auth
            <li>
                <a href="{{ url('/dashboard') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-white">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-user"></i></span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
            </li>
        @else
                <li>
                    <a href="{{ route('login') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-in"></i></span>
                        <span class="text-sm font-medium">LogIn</span>
                    </a>
                </li>

            @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-white">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-user-plus"></i></span>
                            <span class="text-sm font-medium">register</span>
                        </a>
                    </li>
            @endif
        @endauth
    @endif
            </ul>


</div>
<section class = "escorts sec-width" id = "Escort preview">
    <div class = "title2">
        <h1 class="titleText2 text-white">Escorts</h1>
    </div>
    <div class="grid grid-cols-4 gap-4 mx-auto">
        <div class="w-full cont rounded escort-image" >
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl.jpg')}}"></a>
            <div class="username">Username</div>
            <div class="location">Location</div>
            <strong class="Available">Available</strong>
            <div class="AvailableBar">
            </div>
        </div>
        <div class="w-full cont rounded escort-image">
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl2.jpg')}}"></a>
            <div class="username">Username</div>
            <div class="location">Location</div>
            <strong class="Available">Available</strong>
            <div class="AvailableBar">
            </div>
        </div>
        <div class="w-full cont rounded escort-image">
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl3.jpg')}}"></a>
            <div class="username">Username</div>
            <div class="location">Location</div>
            <strong class="Available">Available</strong>
            <div class="AvailableBar">
            </div>
        </div>
        <div class="w-full cont rounded escort-image">
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl4.jpg')}}"></a>
            <div class="username">Username</div>
            <div class="location">Location</div>
            <strong class="Available">Available</strong>
            <div class="AvailableBar">
            </div>
        </div>
        <div class="w-full cont rounded escort-image">
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl5.png')}}"></a>
            <div class="username text-black">Username</div>
            <div class="location text-black">Location</div>
            <strong class="Available">Available</strong>
            <div class="AvailableBar">
            </div>
        </div>
        <div class="w-full cont rounded escort-image">
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl6.jpg')}}"></a>
            <div class="username text-black">Username</div>
            <div class="location text-black">Location</div>
            <strong class="Available">Available</strong>
            <div class="AvailableBar">
            </div>
        </div>
        <div class="w-full cont rounded escort-image">
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl7.jpg')}}"></a>
            <div class="username text-black">Username</div>
            <div class="location text-black">Location</div>
            <strong class="Available">Available</strong>
            <div class="AvailableBar">
            </div>
        </div>
        <div class="w-full cont rounded escort-image">
            <a href="{{route('Posts.index')}}"><img src="{{asset('images/girl8.jpg')}}"></a>
            <div class="username text-black">Username</div>
            <div class="location text-black">Location</div>
            <strong class="Unavailable">Unavailable</strong>
            <div class="UnavailableBar">
            </div>
        </div>
    </div>
</section>
<!--reviews/testimonials-->
<section class = "rules" id = "rules">
    <div class = "sec-width">
        <div class = "title">
            <h1 class="titleText">Rules</h1>
        </div>
        <div class = "rules-container">
            <!-- single customer 0-->
            <div class = "rule">
                <h2 class="disclaimer"> Disclaimer 1# </h2>
                <h3 class="disclaimerText">This site prohibits any offer or solicitation for prostitution.
                   Any activity which takes place outside this site is beyond our control and is meant to strictly be between consenting adults. </h3>
            </div>


            <!-- single rule 1-->
            <div class = "rule">
                <h2 class="disclaimer"> Disclaimer 2# </h2>
                <h3 class="disclaimerText">Don't harass the escorts(this may result in a lawsuit) and don't post fake profiles(this may result in a ban and possibly a lawsuit) </h3>
            </div>


            <!-- single rule 2-->
            <div class = "rule">
                <h2 class="disclaimer"> Disclaimer 3# </h2>
                <h3 class="disclaimerText">everything is consensual. The escorts set their own price tags. We are not held responsible if you get scammed</h3>
            </div>
        </div>
    </div>
</section>
<!--end of reviews/testimonials-->

<!-- footer -->
<footer class = "footer">
    <div class = "footer-container">
        <div>
            <h2>About Us </h2>
            <p>we deal in "women" escorts, but we plan to deal in male escorts too</p>
            <ul class = "social-icons">
                <li class = "flex">
                    <i class = "fa fa-twitter fa-2x"></i>
                </li>
                <li class = "flex">
                    <i class = "fa fa-facebook fa-2x"></i>
                </li>
                <li class = "flex">
                    <i class = "fa fa-instagram fa-2x"></i>
                </li>
            </ul>
        </div>

        <div>
            <h2>Useful Links</h2>
            <a href = "#">Blog</a>
            <a href = "#">Privacy Policy</a>
            <a href = "#">Rules</a>
            <a href = "#">Report</a>
        </div>

        <div>
            <h2>Us</h2>
            <a href = "#">Career</a>
            <a href = "#">Roadmap</a>
        </div>

        <div>
            <h2>Contacts</h2>
            <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +1-202-555-0175
                        </span>
            </div>
            <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@none.com
                        </span>
            </div>
        </div>
    </div>
</footer>
@endsection
<!-- end of footer -->

