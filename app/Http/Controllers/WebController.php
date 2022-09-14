<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        return view('web-side.index');
    }

    public function About()
    {
        return view('web-side.about');
    }

    public function houseRules()
    {
        return view('web-side.house_rules');
    }

    public function Safety()
    {
        return view('web-side.safety');
    }

    public function Location()
    {
        return view('web-side.location');
    }

    public function Venue()
    {
        return view('web-side.venue');
    }

    public function membershipPlans()
    {
        return view('web-side.membership');
    }

    public function Team()
    {
        return view('web-side.team');
    }

    public function Contact()
    {
        return view('web-side.contact');
    }

    public function ContactMail(Request $request)
    {
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
        ];

        Mail::to($request->email)->send(new NotifyMail($data));
        return back()->with('success', 'Email Send Successfully');
    }

    public function Login()
    {
        return view('web-side.login');
    }
}
