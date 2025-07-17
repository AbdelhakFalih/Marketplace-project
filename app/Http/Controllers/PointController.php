<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Point;
class PointController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $points = auth()->user()->points()->sum('points');
        return view('points.index', compact('points'));
    }
}
