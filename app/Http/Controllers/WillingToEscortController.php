<?php

namespace App\Http\Controllers;

use App\Http\Requests\WillingToEscortRequest;
use App\Models\WillingToEscort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WillingToEscortController extends Controller
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
                $data = WillingToEscort::all();
                return view('WillingToEscort.index', ['Willing_To_Escort' => $data]);
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
                return view('WillingToEscort.create');
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
    public function store(WillingToEscortRequest $request)
    {
        WillingToEscort::firstOrCreate(['willing_to_escort' => $request->input('willing_to_escort')]);
        return redirect(route('WillingToEscort.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(WillingToEscort $WillingToEscort)
    {
        $WillingToEscort->delete();
        return redirect(route('dashboard'));
    }
}
