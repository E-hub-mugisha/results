<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
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
        return view('home', compact('services','posts'));
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
        return view('blog-details', compact('detail','rPosts'));
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
}
