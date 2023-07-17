<?php

namespace App\Http\Controllers;

use App\Http\Requests\EyeColorRequest;
use App\Models\EyeColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EyeColorController extends Controller
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
            if (Auth::user()->hasRole('admin'))
            {
                $data = EyeColor::all();
                return view('EyeColor.index', ['EyeColors' => $data]);
            }
            else
            {
                return abort(404);
            }
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
        if (Auth::check())
        {
            if (Auth::user()->hasRole('admin'))
            {
                return view('EyeColor.create');
            }
            else
            {
                return abort(404);
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(EyeColorRequest $request)
    {
        EyeColor::firstOrCreate(['eye_color' => $request->input('eye_color')]);
        return redirect(route('EyeColor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(EyeColor $EyeColor)
    {
        $EyeColor->delete();
        return redirect(route('dashboard'));
    }
}
