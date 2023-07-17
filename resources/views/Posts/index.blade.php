<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Escort Me</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Range slider-->
    <link rel = "icon" href = "{{asset('images/logo.png')}}" type = "image/png">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">
    <link rel="stylesheet" href="{{asset('css/dropdown.css')}}">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
</head>
<body class="background text-color ground">

<div class="page-holder">
    <!-- navbar-->
    <header class="header background0" id="navbar">
        <div class="container px-lg-3" >
            <nav class="navbar navbar-expand-lg py-3 px-lg-0">
                <span class="navbar-brand fw-bold text-uppercase text-color">Escorts</span>
                <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-color"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <span class="inline-flex items-center"><i class="bx bx-home"></i> <a class="nav_link text-color " href="{{ url('/') }}">Home</a></span>
                            <!-- Link-->
                        </li>
                        <li class="nav-item">

                            <!-- Link--> <span class="inline-flex items-center"><i class="bx bx-user"></i><a class="nav_link text-color" href="{{ url('/dashboard') }}">Dashboard</a></span>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><i class="fas fa-user me-1 text-gray fw-normal"></i>Logged in as: {{ Auth::user()->name }}</li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- SHOP SIDEBAR-->
                <div class="col-lg-3 order-2 order-lg-1">
                    <h6 class="text-uppercase mb-4 bigger_font text-white">Filters</h6>
                    <form action="{{route('search')}}" method="POST">
                        @csrf
                        <h6 class="text-uppercase mb-3">Ethnicities</h6>
                        <select name="ethnicity[]" multiple class="label ui selection fluid dropdown mb-2">

                            @foreach($Ethnicities as $Ethnicity)
                                <option value="{{$Ethnicity->id}}">{{$Ethnicity->ethnicity}}</option>
                            @endforeach
                        </select>
                        <h6 class="text-uppercase mb-3">Breast Sizes</h6>
                        <select name="booba_size[]" multiple="" class="label ui selection fluid dropdown mb-2">

                            @foreach($BoobaSizes as $BoobaSize)
                                <option value="{{$BoobaSize->id}}">{{$BoobaSize->booba_size}}</option>
                            @endforeach
                        </select>
                        <h6 class="text-uppercase mb-3">eye colors</h6>
                        <select name="eye_color[]" multiple="" class="label ui selection fluid dropdown mb-2">
                            @foreach($EyeColors as $EyeColor)
                                <option value="{{$EyeColor->id}}">{{$EyeColor->eye_color}}</option>
                            @endforeach
                        </select>
                        <h6 class="text-uppercase mb-3">Hair colors</h6>
                        <select name="hair_color[]" multiple="" class="label ui selection fluid dropdown mb-2">
                            @foreach($HairColors as $HairColor)
                                <option value="{{$HairColor->id}}">{{$HairColor->hair_color}}</option>
                            @endforeach
                        </select>
                        <h6 class="text-uppercase mb-3">willing to escort</h6>
                        <div class="form-check mb-1">
                            @foreach($WillingToEscort as $willing_to_escort)
                                <input class="form-check-input" type="radio" name="willing_to_escort_option" value="{{$willing_to_escort->id}}">
                                <div class="slightly_bigger_font ">{{$willing_to_escort->willing_to_escort}}</div>
                            @endforeach
                        </div>
                        <h6 class="text-uppercase mb-4">Age range</h6>

                        <div class="form-group col-sm-9">
                            <div class="input-group expiration-date">
                                <input type="number" class="form-control mr-4 mb-6 mt-2 font-monospace" placeholder="min_age" name="min_age" min="18" max="64" >
                                <input type="number" class="form-control ml-2 mb-6 mt-2 font-monospace" placeholder="max_age" name="max_age" min="19" max="65" >

                            </div>
                        </div>
                        <h6 class="text-uppercase mb-4">Height range(centimeters)</h6>
                        <div class="form-group col-sm-9">
                            <div class="input-group expiration-date">
                                <input type="number" class="form-control mr-4 mb-6 mt-2 font-monospace" placeholder="min_height" name="min_height" min="100" max="299" >
                                <input type="number" class="form-control ml-2 mb-6 mt-2 font-monospace" placeholder="max_height" name="max_height" min="101" max="300" >
                            </div>
                        </div>
                        <h6 class="text-uppercase mb-4">Weight range(kilograms)</h6>
                        <div class="form-group col-sm-9">
                            <div class="input-group expiration-date">
                                <input type="number" class="form-control mr-4 mt-2 font-monospace" placeholder="min_weight" name="min_weight" min="35" max="299" >
                                <input type="number" class="form-control ml-2 mt-2 font-monospace" placeholder="max_weight" name="max_weight" min="36" max="300" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary mt-8 px-3"><i class="bx bx-filter">Filter</i></button>

                    </form>
                </div>

                <!-- SHOP LISTING-->
                <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                    <!-- PRODUCT-->
                    <div class="grid grid-cols-4 gap-4 mx-auto">
                        @forelse($posts as $post)
                        <div class="w-full cont rounded escort-image" >
                            @foreach($post->imageData as $image)
                            <a href="{{route('Posts.show', ['Post' => $post->id])}}"><img src="{{url('/storage/'. $image->image_path)}}"></a>
                                @break
                            @endforeach
                            <div class="username">{{$post->EscortPhysicalStats->Age}}</div>
                                <strong class="username text-black">{{$post->alias}}</strong>
                                <strong class="location text-black">{{$post->location}}</strong>
                                @if($post->active_state == true)
                                <strong class="Available">Available</strong>
                                <div class="AvailableBar2">
                                </div>
                                @else
                                    <strong class="Unavailable">Unavailable</strong>
                                    <div class="UnavailableBar2">
                                @endif
                        </div>
                        @empty
                            No Escort created at this time
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        {{ $posts->links('pagination::tailwind') }}
    </section>

    <!-- JavaScript files-->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
    <script>
        (function($) {
            "use strict";
            $('.label.ui.dropdown').dropdown();
            $('.no.label.ui.dropdown').dropdown( { useLabels: false } );
            $('.ui.button').on( 'click', function () { $('.ui.dropdown').dropdown('restore defaults') } )
        })(jQuery);

    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</div>
</body>
</html>
