<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function show()
    {
        $contacts = Contact::latest()->get();
        return view('dashboard', compact('contacts'));
    }
}
