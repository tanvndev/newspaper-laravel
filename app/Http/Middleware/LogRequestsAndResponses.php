<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class LogRequestsAndResponses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next): Response
    {
        // Log request information
        Log::info('Request:', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'parameters' => $request->all(),
            'ip' => $request->ip(),
        ]);

        // Handle the request and get the response
        $response = $next($request);

        // Log response information
        Log::info('Response:', [
            'status_code' => $response->getStatusCode(),
            'headers' => $response->headers->all(),
            // 'content' => $response->getContent(),
        ]);

        return $response;
    }
}
