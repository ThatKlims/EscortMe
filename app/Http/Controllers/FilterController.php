<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\EscortPhysicalStats;
use App\Models\Post;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
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
    }
    public function number_filtering($parameter, $column, $request, $query, $operator)
    {
        if ($request->input($parameter) != null)
        {
            $query->where($column, $operator, $request->input($parameter));
        }
    }

    public function search(Request $request)
    {
        if (Auth::check())
        {
            $results =  DB::table('posts')
                ->join('escort_physical_stats', 'escort_physical_stats.id', '=', 'escort_physical_stats_id');

            $this->filtering('ethnicity', $request, $results);
            $this->filtering('booba_size', $request, $results);
            $this->filtering('eye_color', $request, $results);
            $this->filtering('hair_color', $request, $results);
            $this->number_filtering('willing_to_escort_option', 'willing_to_escort_id', $request, $results, '=');
            $this->number_filtering('min_age', 'age', $request, $results, '>=');
            $this->number_filtering('max_age', 'age', $request, $results, '<=');
            $this->number_filtering('min_height', 'height', $request, $results, '>=');
            $this->number_filtering('max_height', 'height', $request, $results, '<=');
            $this->number_filtering('min_weight', 'weight', $request, $results, '>=');
            $this->number_filtering('max_weight', 'weight', $request, $results, '<=');
            $results->paginate(8);
            $results = DB::table('escort_physical_stats')
                ->join('willing_to_escort_option', 'willing_to_escort_option.id', '=', 'willing_to_escort_option_id')
                ->join('ethnicity', 'ethnicity.id', '=', 'ethnicity_id')
                ->join('booba_sizes', 'booba_sizes.id', '=', 'booba_sizes_id')
                ->select(
                    'willing_to_escort.willing_to_escort',
                    'ethnicity.ethnicity',
                    'booba_sizes.booba_size'
                )
                ->get();

        }
        else
        {
            return redirect('/login');
        }

    }
}
