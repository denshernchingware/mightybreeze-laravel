<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\About;
use App\Models\ContactMail;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Mail;


class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $services = Service::all();
        $projects = Project::latest()->take(1)->get();
        $testimonials = Testimonial::all();
        $abouts = About::all();
        return view('frontend.home', compact('services', 'projects', 'testimonials', 'abouts'));
    }
    public function about()
    {
        $abouts = About::all();
        return view('frontend.about', compact('abouts'));
    }
    public function projects()
    {
        $projects = Project::all();
        return view('frontend.projects', compact('projects'));
    }
    public function services()
    {
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }
    public function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('frontend.testimonial', compact('testimonials'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'comment' => 'required|string|min:10',
        ]);

        // Example: send email / save to DB
       Mail::to('info@mightybreeze.co.zw')->send(new ContactUs($validated));

        // Save to database
        ContactMail::create($validated);

        // return back()->with('success', 'Message sent successfully!');
        return redirect()->to(url()->previous() . '#contactFormSection')
                     ->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}