<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submitContactForm(Request $request)
    {
        // Validate the incoming request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'country' => 'required|string',
            'date' => 'nullable|date',
            'eircode' => 'nullable|string',
            'message' => 'required|string',

        ], [
            'required' => 'All fields are required.', // Custom message for the 'required' rule
        ]);

        // Handle validation errors
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()->first(),
                'code' => 422
            ], 422);
        }

        // Save data to the database
        $contact = Contact::create($request->only(['name',  'email', 'phone', 'message', 'country', 'date', 'eircode']));

        // Return a JSON response
        return response()->json([
            'status' => true,
            'message' => 'Contact form submitted successfully.',
            'data' => $contact,
            'code' => 200
        ], 200);
    }
}
