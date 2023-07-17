@extends('layouts.AuthLayout')

@section('content')
    <div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-30">

            <span class="login100-form-title p-b-20">
                Create a new Post
            </span>

        <form action="{{route('Posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Age --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="number" placeholder="Age" name="age" min="18" max="65">
            </div>

            {{-- Height --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="number" placeholder="Height cm" name="height" min="100" max="300">
            </div>

            {{-- Weight --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="number" placeholder="Weight kg" name="weight" min="35" max="300">
            </div>


            {{-- ethnicity select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="ethnicity_id" class="rember">Select your ethnicity</label>
                <select name="ethnicity_id" class="m-l-6 selections border-transparent" >
                    <option value="" selected>?</option>
                    @foreach($Ethnicities as $Ethnicity)
                        <option value="{{$Ethnicity->id}}">{{$Ethnicity->ethnicity}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Eye Color select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="eye_color_id" class="rember">Select your eye's color</label>
                <select name="eye_color_id" class="m-l-6 selections border-transparent" >
                    <option value="" selected>?</option>
                    @foreach($EyeColors as $EyeColor)
                        <option value="{{$EyeColor->id}}">{{$EyeColor->eye_color}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Hair Color select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="hair_color_id" class="rember">Select your hair color</label>
                <select name="hair_color_id" class="m-l-6 selections border-transparent" >
                    <option value="" selected>?</option>
                    @foreach($HairColors as $HairColor)
                        <option value="{{$HairColor->id}}">{{$HairColor->hair_color}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Booba select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="booba_size_id" class="rember">Select your breast size category</label>
                <select name="booba_size_id" class="m-l-6 selections border-transparent" >
                    <option value="" selected>?</option>
                    @foreach($BoobaSizes as $BoobaSize)
                        <option value="{{$BoobaSize->id}}">{{$BoobaSize->booba_size}}</option>
                    @endforeach
                </select>
            </div>

            {{-- WillingToEscort select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="willing_to_escort_id" class="rember">Select who are you willing to escort</label>
                @foreach($WillingToEscort as $willing_to_escort)
                    <input class="form-check-input" type="radio" name="willing_to_escort_id" value="{{$willing_to_escort->id}}">
                    <div class="slightly_bigger_font ">{{$willing_to_escort->willing_to_escort}}</div>
                @endforeach
            </div>


            {{-- PhoneNumber --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Phone Number" name="phone_number">
            </div>

            {{-- Email --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Email" name="email">
            </div>

            {{-- InstagramLink --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Instagram Link" name="instagram_link">
            </div>

            {{-- TwitterLink --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Twitter Link" name="twitter_link">
            </div>

            {{-- facebook_link --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Facebook Link" name="facebook_link">
            </div>

            {{-- discord_name_and_id --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Discord Name And Id" name="discord_name_and_id">
            </div>

            {{-- OnlyfansLink --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Onlyfans Link" name="onlyfans_link">
            </div>

            {{-- Description --}}
            <div class="wrap-input100 validate-input m-b-22">
                <textarea class="textArea" cols="30" rows="8" name="description" placeholder="Your Description"></textarea>
            </div>

            {{-- alias --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Alias/username" name="alias">
            </div>

            {{-- location --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="your relative location" name="location">
            </div>

            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <label for="Image[]" class="rember">Add images</label>
                <input class="input100" type="file" name="Image[]" id="Image" accept="image/png, image/jpeg, image/jpg" multiple>
            </div>

            {{-- create button--}}
            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    create
                </button>
            </div>
        </form>
        @if($errors->any())
            <div class="w-3/4 m-auto text-center">
                @foreach($errors->all() as $error)
                    <li class="text-red-600 list-none">
                        {{$error}}
                    </li>
                @endforeach
            </div>
        @endif
    </div>

@endsection
