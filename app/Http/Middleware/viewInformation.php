<?php

namespace App\Http\Middleware;

use App\Models\data;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class viewInformation
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
        if (Gate::allows("isCyber") || Gate::allows("isSuperadmin")) {
            return $next($request);
        }
        return redirect('/dashboard')->withErrors([
            'message' => 'You are not authorized to access this page.'
        ]);
    }
}
