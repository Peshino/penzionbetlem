<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class CheckSiteVariant
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
        if (Str::contains($request->getRequestUri(), config('variants.variant_2.name'))) {
            config(['variants.name' => config('variants.variant_2.name')]);
            config(['variants.route_prefix' => config('variants.variant_2.route_prefix')]);
            config(['variants.route_prefix_dash' => config('variants.variant_2.route_prefix_dash')]);
            $variant1 = false;
            $variant2 = true;
        } else {
            config(['variants.name' => config('variants.variant_1.name')]);
            config(['variants.route_prefix' => config('variants.variant_1.route_prefix')]);
            config(['variants.route_prefix_dash' => config('variants.variant_1.route_prefix_dash')]);
            $variant1 = true;
            $variant2 = false;
        }

        View::share(compact(
            'variant1',
            'variant2',
        ));

        return $next($request);
    }
}
