<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnforceSecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add HSTS header with a short max-age for testing (300 seconds = 5 minutes).
        // Do not includeSubDomains yet, to prevent locking out non-HTTPS subdomains if misconfigured.
        if (app()->environment('production') || config('app.env') === 'production') {
            if (method_exists($response, 'header')) {
                $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
                $response->header('Content-Security-Policy', "upgrade-insecure-requests");
                $response->header('X-Frame-Options', 'SAMEORIGIN');
                $response->header('X-Content-Type-Options', 'nosniff');
                $response->header('Referrer-Policy', 'strict-origin-when-cross-origin');
            }
        }

        return $response;
    }
}
