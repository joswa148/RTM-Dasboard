<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:190',
            'phone'   => 'nullable|string|max:20',
            'message' => 'nullable|string|max:2000',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA to submit the form.',
            'g-recaptcha-response.captcha'  => 'Captcha verification failed. Please try again.',
        ]);


        $contact = Contact::create($data);

        // send email (to admin)
        /*
        Mail::raw(
            "New contact from {$contact->name}\nEmail: {$contact->email}\nPhone: {$contact->phone}\nMessage:\n{$contact->message}",
            function($m) use ($contact) {
                $m->to('tech1@thevatconsultant.com')
                  ->subject('New Contact Enquiry');
            }
        );
        */
        
        /*
        Mail::send('emails.contact_admin', ['contact' => $contact], function ($m) use ($contact) {
            $m->to('tech1@thevatconsultant.com')
              ->subject('New Contact Enquiry - '.$contact->name);
            // ->from('no-reply@right-trademark.com', 'Right Trademark'); // optional
        });
        */
        
       
        $sourceUrl = $request->input('source_url')        
                   ?? $request->headers->get('referer') 
                   ?? url()->current();                   
        
        $parts     = parse_url($sourceUrl);
        $siteUrl   = ($parts['scheme'] ?? 'https').'://'.($parts['host'] ?? request()->getHost()).($parts['path'] ?? '');
        $siteHost  = ($parts['host'] ?? request()->getHost()).($parts['path'] ?? ''); // e.g. right-trademark.com/contact
        
        // (optional) safety: force only your domain
        $allowed = parse_url(config('app.url'), PHP_URL_HOST);
        if (($parts['host'] ?? $allowed) !== $allowed) {
            $siteUrl  = rtrim(config('app.url'), '/') . '/contact';
            $siteHost = $allowed . '/contact';
        }
        
        // International (UTC) time string
        $sentUtc = Carbon::now('UTC')->format('d M Y H:i') . ' UTC';
        
        // Optional: also keep your local time (based on app.timezone)
        $tz = config('app.timezone', 'UTC');
        $sentLocal = Carbon::now($tz)->format('d M Y H:i') . ' ' . $tz;
        
        Mail::send('emails.contact_admin', [
            'contact'     => $contact,
            'siteUrl'     => $siteUrl,
            'siteHost'    => $siteHost,
            'sentUtc'     => $sentUtc,
            'sentLocal'   => $sentLocal, // optional
        ], function ($m) use ($contact) {
            $m->to('sales@right-trademark.com')
              ->subject('New Contact Enquiry - '.$contact->name);
        });
        
        return back()->with('success','Thank you! We received your message.');
    }
}
