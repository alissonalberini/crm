<?php

namespace App\Http\Middleware\Client;

use Closure;

class CanClientUpdate
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
        if (!auth()->user()->can('client-update')) {
            Session()->flash('flash_message_warning', 'Not allowed to update client');
            return redirect()->route('clients.index');
        }
        return $next($request);
    }
}
