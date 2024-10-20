<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return JsonResponse
     */
    public function me()
    {
        return response()
            ->json([
                'user' => Auth::user(),
            ]);
    }
}
