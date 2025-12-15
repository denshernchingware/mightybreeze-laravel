<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Testimonial;

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
