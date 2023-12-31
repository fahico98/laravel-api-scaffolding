<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * @return JsonResponse
     */
    public function me()
    {
        return response()->json([
            "user" => Auth::user()
        ]);
    }
}
