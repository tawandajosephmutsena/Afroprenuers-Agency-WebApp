<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class EmailController extends Controller
{
   
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

         // Check the honeypot field
         if ($request->filled('trap')) {
            // If the trap field is filled, redirect back without processing
            return redirect()->back()->with('error', 'Invalid submission.');
        }

        // Send the email
        Mail::raw('Thank you for subscribing!', function ($message) use ($validated) {
            $message->to('sales@mhondoro-inc.co.zw')
                    ->subject('New Email Subscription')
                    ->from($validated['email'], 'Website Visitor');
        });

        return redirect()->back()->with('success', 'Thank you! Your email has been sent.');
    }

   

}