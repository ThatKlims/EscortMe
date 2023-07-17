<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Escort me</title>
    <link rel = "icon" href = "{{asset('images/logo.png')}}" type = "image/png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    {{--    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{--    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

    <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

<header class="header background0" id="navbar">
    <div class="container px-lg-3" >
        <nav class="navbar navbar-expand-lg py-3 px-lg-0">
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-color"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <span class="inline-flex items-center smaller_margin"><i class="bx bx-home"></i> <a class="nav_link text-color " href="{{ url('/') }}">Home</a></span>
                        <!-- Link-->
                    </li>
                    <li class="nav-item">

                        <!-- Link--> <span class="inline-flex items-center small_margin" ><i class="bx bx-user"></i><a class="nav_link text-color" href="{{ url('/dashboard') }}">Dashboard</a></span>
                    </li>

                    <li class="nav-item">

                        <!-- Link--> <span class="inline-flex items-center smaller_margin"><i class="bi bi-arrow-left"></i><a class="nav_link text-color" href="{{ route('Posts.index') }}">Back</a></span>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::id() == $post->users_id || \Illuminate\Support\Facades\Auth::user()->hasRole('admin'))
                        <li class="nav-item">
                            <!-- Link--> <span class="inline-flex items-center"><i class="bx bx-plus"></i><a class="nav_link text-color" href="{{ route('Posts.edit', ['Post' => $post])}}">Edit/Update</a></span>
                        </li>
                        <li class="nav-item">
                            <form style="margin-left: 10px" action="{{route('Posts.destroy', ['Post' => $post])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete" ><i class="bi bi-trash"></i></button>
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- ======= About Section ======= -->
<section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="section-title">
            <p>{{$post->alias}}</p>
        </div>
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                @foreach($post->imageData as $image)
                <img src="{{url('/storage/'. $image->image_path)}}" alt="" style="max-height: 400px; max-width: 600px" class="rounded">
                    @break
                @endforeach
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$post->EscortPhysicalStats->age}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Height:</strong> <span>{{$post->EscortPhysicalStats->height}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Weight:</strong> <span>{{$post->EscortPhysicalStats->weight}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Ethnicity:</strong> <span>{{$post->EscortPhysicalStats->ethnicity->ethnicity}}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Breast size category:</strong> <span>{{$post->EscortPhysicalStats->boobaSize->booba_size}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Willing To Escort:</strong> <span>{{$post->EscortPhysicalStats->willingToEscort->willing_to_escort}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Hair Color:</strong> <span>{{$post->EscortPhysicalStats->eyeColor->eye_color}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Eye Colors:</strong> <span>{{$post->EscortPhysicalStats->hairColor->hair_color}}</span></li>
                        </ul>
                    </div>
                </div>
                <p>
                    {{$post->description}}
                </p>
            </div>
        </div>

    </div><!-- End About Me -->

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

        <div class="section-title">
            <h2>Images</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($post->imageData as $image)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <a href="{{url('/storage/'. $image->image_path)}}"><img src="{{url('/storage/'. $image->image_path)}}" class="testimonial-img" alt=""></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="owl-carousel testimonials-carousel">
        </div>
    </div><!-- End Testimonials  -->
    <div class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My General Location</h3>
                        <p>{{$post->location}}</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            @if($post->EscortContactInfo->twitter_link != '')
                            <a href="{{$post->EscortContactInfo->twitter_link}}" class="twitter"><i class="bi bi-twitter"></i></a>
                            @endif
                            @if($post->EscortContactInfo->facebook_link != '')
                            <a href="{{$post->EscortContactInfo->facebook_link}}" class="facebook"><i class="bi bi-facebook"></i></a>
                            @endif
                            @if($post->EscortContactInfo->instagram_link != '')
                            <a href="{{$post->EscortContactInfo->instagram_link}}" class="instagram"><i class="bi bi-instagram"></i></a>
                            @endif
                            @if($post->EscortContactInfo->onlyfans_link != '')
                            <a href="{{$post->EscortContactInfo->onlyfans_link}}"><img src="{{asset('images/onlyfans.png')}}"></a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p>{{$post->EscortContactInfo->email}}</p>
                    </div>
                </div>
                @if($post->EscortContactInfo->phone_number != '')
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>{{$post->EscortContactInfo->phone_number}}</p>
                    </div>
                </div>
                @endif
                @if($post->EscortContactInfo->discord_name_and_id != '')
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bi-discord"></i>
                        <p>{{$post->EscortContactInfo->discord_name_and_id}}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</section><!-- End About Section -->

<div class="credits">
    This site prohibits any offer for prostitution.
</div>

<!-- Vendor JS Files -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
