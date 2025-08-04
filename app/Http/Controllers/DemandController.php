<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Request;
use Illuminate\Routing\Controller;

class DemandController extends Controller
{
    public function index()
    {
        $demands = Demand::with('user')->paginate(10);
        return view('demands.index', [
            'title' => __('nav.demands'),
            'demands' => $demands,
        ]);
    }

    public function create()
    {
        return view('demands.create', [
            'title' => __('demands.create'),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:product,service',
        ]);
        Demand::create(array_merge($request->all(), ['user_id' => auth()->id()]));
        return redirect()->route('demands.index')->with('success', __('messages.demand_created'));
    }
}
