<?php

namespace App\Http\Controllers;

use App\Http\Requests\InclusiveRequest;
use App\Models\BoobaSize;
use App\Models\EscortContactInfo;
use App\Models\EscortPhysicalStats;
use App\Models\Ethnicity;
use App\Models\EyeColor;
use App\Models\HairColor;
use App\Models\ImageData;
use App\Models\Post;
use App\Models\WillingToEscort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if (Auth::check())
        {
            $PostData = Post::with(['imageData', 'escortPhysicalStats', 'escortContactInfo', 'user',
                'escortPhysicalStats.ethnicity', 'escortPhysicalStats.boobaSize', 'escortPhysicalStats.willingToEscort', 'escortPhysicalStats.eyeColor', 'escortPhysicalStats.hairColor']);
            $EthnicitiesData = Ethnicity::all();
            $BoobaSizeData = BoobaSize::all();
            $EyeColorData = EyeColor::all();
            $HairColorData = HairColor::all();
            $WillingToEscortData = WillingToEscort::all();
            return view('Posts.index', ['posts' => $PostData->paginate(8), 'Ethnicities' => $EthnicitiesData, 'BoobaSizes' => $BoobaSizeData,
                'EyeColors' => $EyeColorData, 'HairColors' => $HairColorData, 'WillingToEscort' => $WillingToEscortData]);
        }
        else
        {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('user') && Post::where('users_id', Auth::user()->id)->exists() === true) {
                return view('UserDashboard');
            } else {
                $EthnicitiesData = Ethnicity::all();
                $BoobaSizeData = BoobaSize::all();
                $EyeColorData = EyeColor::all();
                $HairColorData = HairColor::all();
                $WillingToEscortData = WillingToEscort::all();
                return view('Posts.create', ['Ethnicities' => $EthnicitiesData, 'BoobaSizes' => $BoobaSizeData,
                    'EyeColors' => $EyeColorData, 'HairColors' => $HairColorData, 'WillingToEscort' => $WillingToEscortData]);
            }

        } else {
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(InclusiveRequest $request)
    {
        $EscortPhysicalStat = EscortPhysicalStats::Create
        ([
            'age' => $request->input('age'),
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'ethnicity_id' => $request->input('ethnicity_id'),
            'booba_size_id' => $request->input('booba_size_id'),
            'willing_to_escort_id' => $request->input('willing_to_escort_id'),
            'eye_color_id' => $request->input('eye_color_id'),
            'hair_color_id' => $request->input('hair_color_id'),
        ]);


        $escort_contact_info = EscortContactInfo::firstOrCreate
        ([
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'instagram_link' => $request->input('instagram_link'),
            'twitter_link' => $request->input('twitter_link'),
            'facebook_link' => $request->input('facebook_link'),
            'onlyfans_link' => $request->input('onlyfans_link'),
            'discord_name_and_id' => $request->input('discord_name_and_id')
        ]);

        $post = Post::firstOrCreate
        ([
            'users_id' => Auth::id(),
            'alias' => $request->input('alias'),
            'active_state' => true,
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'escort_physical_stats_id' => $EscortPhysicalStat->id,
            'escort_contact_info_id' => $escort_contact_info->id,
        ]);
        foreach ($request->file('Image') as $image)
        {
            ImageData::firstOrCreate
            ([
                'image_name' => $image->getClientOriginalName(),
                'image_path' => 'images/' . $image->getClientOriginalName(),
                'image_type' => $image->getClientMimeType(),
                'image_size' => $image->getSize(),
                'post_id' => $post->id
            ]);
            $image->storePubliclyAs('public/images', $image->getClientOriginalName());
        }
        return redirect(route('Posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        if (Auth::check())
        {
            $post = Post::find($id);
            return view('Posts.show')->with('post', $post);
        }
        else
        {
            return redirect('/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        if (Auth::check())
        {
            $post = Post::find($id);
            $EthnicitiesData = Ethnicity::all();
            $BoobaSizeData = BoobaSize::all();
            $EyeColorData = EyeColor::all();
            $HairColorData = HairColor::all();
            $WillingToEscortData = WillingToEscort::all();
            return view('Posts.edit', ['Ethnicities' => $EthnicitiesData, 'BoobaSizes' => $BoobaSizeData,
                'EyeColors' => $EyeColorData, 'HairColors' => $HairColorData, 'WillingToEscort' => $WillingToEscortData])->with('post', $post);
        }
        else
        {
            return redirect('/login');
        }
    }

    public function update(Request $request, Post $Post)
    {
        $request->validate(['age' => 'required|integer', 'height' => 'required|integer', 'weight' => 'required|integer', 'ethnicity_id' => 'required|integer',
            'booba_size_id' => 'required|integer', 'willing_to_escort_id' => 'required|integer', 'eye_color_id' => 'required|integer', 'hair_color_id' => 'required|integer',
            'phone_number' => 'nullable|string|numeric|notIn:\'|',
             'instagram_link' => 'notIn:\'|string|nullable|starts_with:https://www.instagram.com/,https://instagram.com/'
            , 'twitter_link' => 'notIn:\'|string|nullable|starts_with:https:https://twitter.com/,https://www.twitter.com/'
            , 'facebook_link' => 'notIn:\'|string|nullable|starts_with:https://www.facebook.com/,https://facebook.com/'
            , 'onlyfans_link' => 'notIn:\'|string|nullable|starts_with:https://onlyfans.com/,https://www.onlyfans.com/'
            , 'discord_name_and_id' => 'notIn:\'|string|nullable',
            'description' => 'required|string|notIn:\'', 'location' => 'required|string|notIn:\'', 'Image*' => 'required|mimes:jpg,png,jpeg|max:2048|unique:image_data']);

        if (EscortContactInfo::where('id', $Post->escortContactInfo->id)->pluck('email')->first() != $request->input('email'))
        {
            $request->validate(['email' => 'email:rfc,dns,filter|required|unique:escort_contact_info']);
        }
        if ($Post->alias != $request->input('alias'))
        {
            $request->validate(['alias' => 'string|alpha_dash|unique:posts']);
        }

        $Post->escortPhysicalStats->update

        ([
            'age' => $request->input('age'),
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'ethnicity_id' => $request->input('ethnicity_id'),
            'booba_size_id' => $request->input('booba_size_id'),
            'willing_to_escort_id' => $request->input('willing_to_escort_id'),
            'eye_color_id' => $request->input('eye_color_id'),
            'hair_color_id' => $request->input('hair_color_id'),
        ]);
        $Post->escortContactInfo->update
        ([
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'instagram_link' => $request->input('instagram_link'),
            'twitter_link' => $request->input('twitter_link'),
            'facebook_link' => $request->input('facebook_link'),
            'onlyfans_link' => $request->input('onlyfans_link'),
            'discord_name_and_id' => $request->input('discord_name_and_id')
        ]);
        $Post->update
        ([
            'users_id' => Auth::id(),
            'alias' => $request->input('alias'),
            'active_state' => $request->input('active_state'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'escort_physical_stats_id' => $Post->escortPhysicalStats->id,
            'escort_contact_info_id' => $Post->escortContactInfo->id,
        ]);


        if($request->hasfile('Image'))
        {
            $request->validate(['Image' => 'required', 'Image.*' => 'image|mimes:jpg,png,jpeg|max:2048']);
            if ($Post->imageData->count() != 0) {
                foreach ($Post->imageData as $image) {
                    if ($image->post_id == $Post->id) {
                        File::delete('/storage/' . $image->image_path);
                        $image->delete();
                    }
                }
            }
            foreach ($request->file('Image') as $image)
            {
                ImageData::firstOrCreate
                ([
                    'image_name' => $image->getClientOriginalName(),
                    'image_path' => 'images/' . $image->getClientOriginalName(),
                    'image_type' => $image->getClientMimeType(),
                    'image_size' => $image->getSize(),
                    'post_id' => $Post->id
                ]);

                $image->storePubliclyAs('public/images', $image->getClientOriginalName());
            }
        }
        return redirect(route('Posts.index'));
    }

    public function destroy(Post $Post)
    {
        $Post->delete();
        $Post->escortContactInfo->delete();
        $Post->escortPhysicalStats->delete();
        foreach ($Post->imageData as $image)
        {
            if ($image->post_id == $Post->id)
            {
                File::delete('/storage/' . $image->image_path);
                $image->delete();
            }
        }

        return redirect(route('dashboard'));
    }

    public function filtering($parameter, $request, $query)
    {
        if ($request->input($parameter) != null && count($request->input($parameter)) == 1)
        {
            $query->where("{$parameter}_id", '=', $request->input($parameter));
        }
        elseif ($request->input($parameter) != null && count($request->input($parameter)) > 1)
        {
            $query->WhereIn("{$parameter}_id", $request->input($parameter));
        }
        return $query;
    }
    public function number_filtering($parameter, $column, $request, $query, $operator)
    {
        if ($request->input($parameter) != null)
        {
            $query->where($column, $operator, $request->input($parameter));
        }
        return $query;
    }

    public function search(Request $request)
    {
        if (Auth::check())
        {
            $results = Post::with(['imageData', 'escortPhysicalStats', 'escortContactInfo', 'user',
                'escortPhysicalStats.ethnicity', 'escortPhysicalStats.boobaSize', 'escortPhysicalStats.willingToEscort', 'escortPhysicalStats.eyeColor', 'escortPhysicalStats.hairColor'])
                ->join('escort_physical_stats', 'escort_physical_stats.id', '=', 'escort_physical_stats_id');



            $results = $this->filtering('ethnicity', $request, $results);
            $results = $this->filtering('booba_size', $request, $results);
            $results = $this->filtering('eye_color', $request, $results);
            $results = $this->filtering('hair_color', $request, $results);
            $results = $this->number_filtering('willing_to_escort_option', 'willing_to_escort_id', $request, $results, '=');
            $results = $this->number_filtering('min_age', 'age', $request, $results, '>=');
            $results = $this->number_filtering('max_age', 'age', $request, $results, '<=');
            $results = $this->number_filtering('min_height', 'height', $request, $results, '>=');
            $results = $this->number_filtering('max_height', 'height', $request, $results, '<=');
            $results = $this->number_filtering('min_weight', 'weight', $request, $results, '>=');
            $results = $this->number_filtering('max_weight', 'weight', $request, $results, '<=');
            $results = $results->paginate(8);
            $EthnicitiesData = Ethnicity::all();
            $BoobaSizeData = BoobaSize::all();
            $EyeColorData = EyeColor::all();
            $HairColorData = HairColor::all();
            $WillingToEscortData = WillingToEscort::all();
            return view('Posts.index', ['posts' => $results, 'Ethnicities' => $EthnicitiesData, 'BoobaSizes' => $BoobaSizeData,
                'EyeColors' => $EyeColorData, 'HairColors' => $HairColorData, 'WillingToEscort' => $WillingToEscortData]);
        }
        else
        {
            return redirect('/login');
        }

    }
}
