@extends('layouts.AuthLayout')

@section('content')
    <div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-30">

            <span class="login100-form-title p-b-20">
                Update your Post
            </span>

        <form action="{{route('Posts.update', ['Post' => $post])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Age --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="number" placeholder="Age" name="age" min="18" max="65" value="{{$post->EscortPhysicalStats->age}}">
            </div>

            {{-- Height --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="number" placeholder="Height cm" name="height" min="100" max="300" value="{{$post->EscortPhysicalStats->height}}">
            </div>

            {{-- Weight --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="number" placeholder="Weight kg" name="weight" min="35" max="300" value="{{$post->EscortPhysicalStats->weight}}">
            </div>


            {{-- ethnicity select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="ethnicity_id" class="rember">Select your ethnicity</label>
                <select name="ethnicity_id" class="m-l-6 selections border-transparent" >
                    <option value="{{$post->EscortPhysicalStats->ethnicity->id}}" selected>current: {{$post->EscortPhysicalStats->ethnicity->ethnicity}}</option>
                    @foreach($Ethnicities as $Ethnicity)
                        <option value="{{$Ethnicity->id}}">{{$Ethnicity->ethnicity}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Eye Color select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="eye_color_id" class="rember">Select your eye's color</label>
                <select name="eye_color_id" class="m-l-6 selections border-transparent" >
                    <option value="{{$post->EscortPhysicalStats->eyeColor->id}}" selected>current: {{$post->EscortPhysicalStats->eyeColor->eye_color}}</option>
                    @foreach($EyeColors as $EyeColor)
                        <option value="{{$EyeColor->id}}">{{$EyeColor->eye_color}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Hair Color select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="hair_color_id" class="rember">Select your hair color</label>
                <select name="hair_color_id" class="m-l-6 selections border-transparent" >
                    <option value="{{$post->EscortPhysicalStats->hairColor->id}}" selected>{{$post->EscortPhysicalStats->hairColor->hair_color}}</option>
                    @foreach($HairColors as $HairColor)
                        <option value="{{$HairColor->id}}">{{$HairColor->hair_color}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Booba select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="booba_size_id" class="rember">Select your breast size category</label>
                <select name="booba_size_id" class="m-l-6 selections border-transparent" >
                    <option value="{{$post->EscortPhysicalStats->boobaSize->id}}" selected>current: {{$post->EscortPhysicalStats->boobaSize->booba_size}}</option>
                    @foreach($BoobaSizes as $BoobaSize)
                        <option value="{{$BoobaSize->id}}">{{$BoobaSize->booba_size}}</option>
                    @endforeach
                </select>
            </div>

            {{-- WillingToEscort select --}}
            <div class="wrap-input100 validate-input m-b-10">
                <label for="willing_to_escort_id" class="rember">Select who are you willing to escort</label>
                @foreach($WillingToEscort as $willing_to_escort)
                    @if($willing_to_escort->id == $post->EscortPhysicalStats->willingToEscort->id)
                    <input class="form-check-input" type="radio" name="willing_to_escort_id" value="{{$willing_to_escort->id}}" checked="checked">
                    <div class="slightly_bigger_font ">{{$willing_to_escort->willing_to_escort}}</div>
                    @else
                        <input class="form-check-input" type="radio" name="willing_to_escort_id" value="{{$willing_to_escort->id}}">
                        <div class="slightly_bigger_font ">{{$willing_to_escort->willing_to_escort}}</div>
                    @endif
                @endforeach
            </div>


            {{-- PhoneNumber --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Phone Number" name="phone_number" value="{{$post->EscortContactInfo->phone_number}}">
            </div>

            {{-- Email --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Email" name="email" value="{{$post->EscortContactInfo->email}}">
            </div>

            {{-- InstagramLink --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Instagram Link" name="instagram_link" value="{{$post->EscortContactInfo->instagram_link}}">
            </div>

            {{-- TwitterLink --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Twitter Link" name="twitter_link" value="{{$post->EscortContactInfo->twitter_link}}">
            </div>

            {{-- facebook_link --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Facebook Link" name="facebook_link" value="{{$post->EscortContactInfo->facebook_link}}">
            </div>

            {{-- discord_name_and_id --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Discord Name And Id" name="discord_name_and_id" value="{{$post->EscortContactInfo->discord_name_and_id}}">
            </div>

            {{-- OnlyfansLink --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Full Onlyfans Link" name="onlyfans_link" value="{{$post->EscortContactInfo->onlyfans_link}}">
            </div>

            {{-- Description --}}
            <div class="wrap-input100 validate-input m-b-22">
                <textarea class="textArea" cols="30" rows="8" name="description" placeholder="Your Description">{{$post->description}}</textarea>
            </div>

            {{-- alias --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="Alias/username" name="alias" value="{{$post->alias}}">
            </div>
            {{-- is the room taken or not --}}
            <div class="block mt-4">
                <label for="isFree"  class="inline-flex items-center">
                    @if($post->active_state == true)
                    <input name="active_state" type="hidden" value="0">
                    <input checked name="active_state" type="checkbox" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ">
                    <span class="rember p-b-10 p-t-5">Is Active</span>
                    @else
                        <input checked name="active_state" type="hidden" value="0">
                        <input name="active_state" type="checkbox" value="1" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 ">
                        <span class="rember p-b-10 p-t-5">Is Active</span>
                    @endif

                </label>
            </div>

            {{-- location --}}
            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <input class="input100" type="text" placeholder="your relative location" name="location" value="{{$post->location}}">
            </div>

            <div class="wrap-input100 validate-input m-b-25 m-t-4">
                <label for="Image[]" class="rember">Add images</label>
                <input class="input100" type="file" name="Image[]" accept="image/png, image/jpeg, image/jpg" multiple>
                <p>curent images:</p>
                @foreach($post->imageData as $image)
                <a href="{{url('/storage/'. $image->image_path)}}">{{$image->image_name}}</a>
                @endforeach
                <p>previous images will be overwritten</p>
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
