<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('frontend.contact.index', compact('contact'));
    }
}
