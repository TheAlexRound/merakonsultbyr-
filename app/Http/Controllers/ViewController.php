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
        $validated = $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'surname' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        // Validate reCAPTCHA
        $recaptchaSecret = config('services.recaptcha.secret_key');
        $response = $request->input('g-recaptcha-response');

        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}");
        $captchaResponse = json_decode($verify);

        if (!$captchaResponse->success) {
            return back()->withErrors(['g-recaptcha-response' => 'ReCAPTCHA verification failed. Please try again.']);
        }

        $email = $validated['email'];
        $name = $validated['name'];
        $surname = $validated['surname'];

        Mail::to('info@merakonsult.se')->send(new ContactForm($email, $name, $surname));
        return redirect()->route('welcome')->with('msg', 'Skickad! Vi hör av oss inom kort!');
    }
}
