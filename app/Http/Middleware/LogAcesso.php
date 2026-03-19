<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso as LogAcessoModel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogAcesso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcessoModel::create([
            "log" => "IP $ip requisitou a rota '$rota'"
        ]);

        return Response("Passou pelo Middleware");
    }
}
