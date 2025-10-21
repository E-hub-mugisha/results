<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use App\Mail\ContactMail;
use App\Mail\SessionBookingMail;
use App\Models\Blog;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Homecontroller extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        $posts = Post::inRandomOrder()->take(2)->get();
        $blogs = Blog::latest()->paginate(6);
        return view('index', compact('services', 'posts', 'blogs'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function post()
    {
        $posts = Post::inRandomOrder()->simplePaginate(6);
        return view('blog', compact('posts'));
    }
    public function postDetail($title)
    {
        $detail = Post::where('title', $title)->first();
        $rPosts = Post::Latest()->get();
        return view('blog-details', compact('detail', 'rPosts'));
    }
    public function submit(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        $data = $request->all();

        // Send the email
        Mail::to('nsenthos@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'course' => 'required|string|max:255',
        ]);

        // Send the email
        Mail::to('kabosierik@gmail.com')->send(new AppointmentMail($validated));

        return back()->with('success', '✅ Your appointment request has been sent successfully!');
    }

    public function sendSession(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'title' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'service' => 'required|string|max:255',
        ]);

        // Send email to admin
        Mail::to('kabosierik@gmail.com')->send(new SessionBookingMail($validated));

        return back()->with('success', '✅ Your session has been booked successfully. We’ll contact you shortly!');
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('blogs', compact('blogs'));
    }
    public function showBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::latest()->take(3)->get();

        return view('blog-details', compact('blog', 'recentBlogs'));
    }
}
