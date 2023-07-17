<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoobaSizeRequest;
use App\Models\BoobaSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoobaSizeController extends Controller
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
                $data = BoobaSize::all();
                return view('BoobaSize.index', ['BoobaSizes' => $data]);
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
                return view('BoobaSize.create');
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
    public function store(BoobaSizeRequest $request)
    {
        BoobaSize::firstOrCreate(['booba_size' => $request->input('booba_size')]);
        return redirect(route('BoobaSize.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(BoobaSize $BoobaSize)
    {
        $BoobaSize->delete();
        return redirect(route('dashboard'));
    }
}
