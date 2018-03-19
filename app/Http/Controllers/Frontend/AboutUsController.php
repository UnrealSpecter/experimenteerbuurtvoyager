<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\FAQ;
use Carbon\Carbon;

class AboutUsController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();

        return view('frontend.about-us.index', compact('faqs'));
    }
}
