<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://localhost:8000/api/countries.store',
        'http://localhost:8000/api/countries',
        'http://localhost:8000/api/AllApplies',
        'http://localhost:8000/api/AllApplies.update',
        'http://127.0.0.1:8000/api/register',
    ];
}
