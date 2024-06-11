<?php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Autres propriétés et méthodes...

    protected $routeMiddleware = [
        // Autres middlewares...
        'role' => \App\Http\Middleware\CheckRole::class,
    ];
}