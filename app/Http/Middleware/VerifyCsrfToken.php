<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'http://127.0.0.1:8000/slot/add',
        'http://127.0.0.1:8000/notification',
        'http://127.0.0.1:8000/savedjobs',
        'http://127.0.0.1:8000/reviewnotification',
        'http://127.0.0.1:8000/participatingnotification',
        'http://127.0.0.1:8000/assignednotification',
        'http://127.0.0.1:8000/donenotification',
        'http://127.0.0.1:8000/jobs',
        'http://127.0.0.1:8000/mail'
    ];
}
