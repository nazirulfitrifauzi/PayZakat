<?php

namespace App\Http\Middleware;

use App\Models\Agents;
use Closure;

class CheckMaklumatPengguna
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
        $check = Agents::where('user_id',auth()->user()->id)->exists();

        if($check == false)
        {
            session()->flash('type', 'error');
            session()->flash('title', 'Ralat!');
            session()->flash('message', 'Anda perlu melengkapkan maklumat pengguna sebelum menggunakan sistem ini.');
            return redirect('maklumat-pengguna');
        }

        return $next($request);
    }
}
