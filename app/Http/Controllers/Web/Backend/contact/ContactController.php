<?php

namespace App\Http\Controllers\Web\Backend\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); 
        return view('backend.layouts.contact.index', compact('contacts'));
    }
}
