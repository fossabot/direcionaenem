<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function index()
    {
        return [
            'message' => 'Welcome to the Api!!!'
        ];
    }
}
