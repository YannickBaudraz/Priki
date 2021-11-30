<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class HomeController extends Controller
{

    final public function index(): Factory|View|Application
    {
        return view('home');
    }
}