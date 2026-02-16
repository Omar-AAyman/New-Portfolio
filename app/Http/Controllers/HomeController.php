<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\AdminContactMail;
use App\Mail\CustomerContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::latest('published_at')->get();
        return view('welcome', compact('posts'));
    }


    public function sendMessage(ContactFormRequest $request)
    {
        $validated = $request->validated();

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['msg'],
        ]);

        Log::info('Contact Form Submission:', $validated);

        try {
            Mail::to(config('app.admin_email'))->send(new AdminContactMail($validated));
            
            $locale = app()->getLocale();
            Mail::to($validated['email'])->send(new CustomerContactMail($validated, $locale));
        } catch (\Exception $e) {
            Log::error('Mail sending failed: '.$e->getMessage());
        }

        return response()->json(['success' => __('Message sent successfully!', ['name' => $validated['name']])]);
    }
}
