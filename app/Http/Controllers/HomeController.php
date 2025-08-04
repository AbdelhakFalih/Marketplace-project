<?php

namespace App\Http\Controllers;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $offers = Offre::take(6)->get();
        return view('home', [
            'title' => __('site.title'),
            'offers' => $offers,
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => __('nav.about'),
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => __('nav.contact'),
        ]);
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        // Logique d'envoi de mail (à implémenter avec App\Mail)
        return redirect()->back()->with('success', __('messages.contact_sent'));
    }

    public function offers()
    {
        $offers = Offre::paginate(10);
        return view('offers.index', [
            'title' => __('nav.offers'),
            'offers' => $offers,
        ]);
    }
}
