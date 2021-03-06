<?php

namespace Src\Gatekeeper\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Index de persons
     */
    public function index()
    {
        $response = [
            "status" => "Success",
            "message" => "Welcome to Levíti API"
        ];
        return response()->json($response);
    }
}
