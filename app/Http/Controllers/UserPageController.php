<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Admin\About;
use App\Models\Admin\Category;
use App\Models\Admin\Client;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Slider;
use App\Models\Admin\Team;
use App\Models\Admin\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class UserPageController extends Controller
{
    public function home() {
        return view("users.home", [
            'sliders'       => Slider::latest()->get(),
            'f_services'    => Service::where('featured', true)->latest()->get(),
            'projects'      => Project::where('featured', true)->latest()->get(),
            'clients'       => Client::latest()->get(),
            'testimonials'  => Testimonial::whereNotNull('message')->latest()->get(),
            'teams'         => Team::latest()->get(),
        ]);
    }

    public function about() {
        return view("users.about", [
            'teams'         => Team::latest()->get(),
        ]);
    }

    public function contact() {
        return view("users.contact");
    }

    public function service() {
        return view("users.services");
    }

    public function servicedetails($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        // Previous (loop)
        $previous = Service::where('id', '<', $service->id)
            ->orderBy('id', 'desc')
            ->first();

        if (!$previous) {
            $previous = Service::orderBy('id', 'desc')->first(); // last service
        }

        // Next (loop)
        $next = Service::where('id', '>', $service->id)
            ->orderBy('id', 'asc')
            ->first();

        if (!$next) {
            $next = Service::orderBy('id', 'asc')->first(); // first service
        }

        return view('users.service-details', compact('service', 'previous', 'next'));
    }

    public function projects() {
        $categories = Category::orderBy('name')->get();
        $projects = Project::with('category')->latest()->get();
        return view('users.projects', compact('categories', 'projects'));
    }

    public function projectdetails($slug) {
        return view("users.project-details", [
            'project' => Project::where('slug', $slug)->firstOrFail()
        ]);
    }

    public function blogs() {
        return view("users.blogs");
    }

    public function blogdetails($slug) {
        return view("users.blog-details");
    }

    public function privacyPolicy() {
        return view("users.privacy-policy");
    }
    
    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'nullable|string|max:100',
            'message'   => 'nullable|string|max:1000',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            Mail::to('info@apexsoftlabs.com')->send(new ContactFormMail($request->all()));
            return redirect()->back()->with('success_message', 'Your message has been sent successfully.');
        } catch (\Exception $e) {
            Log::error('Mail Send Error: ' . $e->getMessage());
            return redirect()->back()->with('error_message', 'Sorry there was an error sending your form.');
        }
    }
}
