<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VotingClosed
{
    /**
     * Blocks public voting (registration/login and vote submission) now that
     * the voting window has ended, regardless of whether the visitor already
     * holds a voter session from before closure.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return redirect()
            ->route('show_login_form')
            ->with('danger', 'Voting has closed for this edition. Thank you to everyone who took part — winners will be announced at the Gala.');
    }
}
