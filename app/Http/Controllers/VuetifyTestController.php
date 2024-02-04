<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class VuetifyTestController extends Controller
{

    public function index()
    {
        return Inertia::render("VuetifyTest");
    }
}
