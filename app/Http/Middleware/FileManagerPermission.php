<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

class FileManagerPermission
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard("user")->check()) {
            $userDirectory = storage_path("app/private")."/".Auth::guard("user")->user()->base_directory_name;
            config(['filesystems.disks.private.root' => storage_path("app/private/rxsx60001")]);
        }
        return $next($request);
    }
}
