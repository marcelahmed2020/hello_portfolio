<?php
namespace App\Http\Middleware;
use Closure;
class Close_Site
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next)
    {
        if (sitesetting()->status  == 0) {
            if (\Auth::guest()) {
                return redirect('/coming-soon');
            }
        }
        return $next($request);
    }
}