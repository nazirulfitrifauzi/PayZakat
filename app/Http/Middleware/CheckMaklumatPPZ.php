<?php

namespace App\Http\Middleware;

use App\Models\PPZ;
use Closure;

class CheckMaklumatPPZ
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
        if (auth()->user()->role == 2) // only ppz (2) need to be checked for existence of maklumat ppz, admin (0) doesn't require any check up
        {
            $check = PPZ::where('id', auth()->user()->id)->exists();
        } else {
            $check = true;
        }

        if ($check == false) {
            session()->flash('type', 'warning');
            session()->flash('title', 'Perhatian!');
            session()->flash('message', 'Anda perlu melengkapkan maklumat pusat pungutan zakat sebelum menggunakan sistem ini.');
            return redirect('maklumat-ppz');
        }

        return $next($request);
    }
}
