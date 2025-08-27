<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ViewController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function tjanster() {
        return view('tjanster');
    }

    public function omOss() {
        return view('omOss');
    }

    public function sendEmail(Request $request){
        // Check honeypot field
        if (!empty($request->input('website'))) {
            // Bot detected - honeypot field was filled
            return back()->withErrors(['form' => 'Form submission failed. Please try again.']);
        }

        // Check time-based protection (minimum 3 seconds)
        $formTimestamp = $request->input('form_timestamp');
        if (!$formTimestamp || (time() - $formTimestamp) < 3) {
            return back()->withErrors(['form' => 'Form submitted too quickly. Please wait a moment and try again.']);
        }

        // Check for common spam patterns in message
        $message = $request->input('surname', '');
        $spamPatterns = [
            '/\b(viagra|cialis|casino|poker|loan|credit|debt|bitcoin|crypto)\b/i',
            '/\b(click here|visit now|act now|limited time)\b/i',
            '/(http|https|www\.)[^\s]+/i', // URLs
            '/\$\d+|\d+\$/', // Money amounts
            '/[A-Z]{5,}/', // Excessive capitals
        ];
        
        foreach ($spamPatterns as $pattern) {
            if (preg_match($pattern, $message) || preg_match($pattern, $request->input('name', ''))) {
                return back()->withErrors(['form' => 'Your message contains inappropriate content. Please revise and try again.']);
            }
        }

        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'name' => 'required|string|max:255|min:2|regex:/^[A-Za-zÀ-ÿ\s]+$/',
            'surname' => 'required|string|max:1000|min:10',
            'g-recaptcha-response' => 'required',
            'form_timestamp' => 'required|numeric',
        ], [
            'name.regex' => 'Namn får endast innehålla bokstäver och mellanslag.',
            'name.min' => 'Namn måste vara minst 2 tecken.',
            'surname.min' => 'Meddelandet måste vara minst 10 tecken.',
            'surname.max' => 'Meddelandet får inte överstiga 1000 tecken.',
            'g-recaptcha-response.required' => 'Vänligen bekräfta att du inte är en robot.',
        ]);

        // Validate reCAPTCHA
        $recaptchaSecret = config('services.recaptcha.secret_key');
        $response = $request->input('g-recaptcha-response');
        $userIP = $request->ip();

        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}&remoteip={$userIP}");
        $captchaResponse = json_decode($verify);

        if (!$captchaResponse->success || (isset($captchaResponse->score) && $captchaResponse->score < 0.5)) {
            return back()->withErrors(['g-recaptcha-response' => 'ReCAPTCHA verifiering misslyckades. Vänligen försök igen.']);
        }

        // Rate limiting check (optional - you can implement with Redis/Cache)
        $rateLimitKey = 'form_submission_' . $request->ip();
        if (cache()->has($rateLimitKey)) {
            return back()->withErrors(['form' => 'För många försök. Vänligen vänta en minut innan du försöker igen.']);
        }
        
        // Set rate limit (1 submission per minute per IP)
        cache()->put($rateLimitKey, true, 60);

        $email = $validated['email'];
        $name = $validated['name'];
        $surname = $validated['surname'];

        Mail::to('info@merakonsult.se')->send(new ContactForm($email, $name, $surname));
        return redirect()->route('welcome')->with('msg', 'Skickad! Vi hör av oss inom kort!');
    }
}
