<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocal
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
        */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);
        if (in_array($locale, ['fr', 'ar'])) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        } else {
            App::setLocale('fr'); // Default to French
            $locale = 'fr';
            if (!$request->is('register') && !$request->is('login')) {
                return redirect("/$locale" . $request->getPathInfo());
            }
        }
        return $next($request);
    }

}
