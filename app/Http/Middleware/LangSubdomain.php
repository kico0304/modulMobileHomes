<?php

namespace App\Http\Middleware;

use App\Language;
use Closure;
use Illuminate\Support\Facades\App;

class LangSubdomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $country_code = '';
        $url_array = explode('.', parse_url($request->url(), PHP_URL_HOST));
        $subdomain = $url_array[0];
        $ip_address = \Request::ip();
        $get_country = \Location::get($ip_address);
        if($get_country){
            $country_code = strtolower($get_country->countryCode);
        }

        $languages = Language::all()->toArray();

        if (in_array($subdomain, $languages)) {
            App::setLocale($subdomain);
        }elseif(in_array($country_code, $languages)){
            App::setLocale($country_code);
        }

        return $next($request);
    }
}
