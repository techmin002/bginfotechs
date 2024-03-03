<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use Modules\Faq\Entities\Faq;
use Modules\Service\Entities\Service;
use Modules\Service\Entities\ServiceCategory;
use Modules\Testimonial\Entities\Testimonial;

class FrontendController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::all();
        $data['faqs'] = Faq::all();
        $data['testimonials'] = Testimonial::all();
        $data['categories'] = ServiceCategory::where('status','on')->get();
        return view('frontend.welcome', compact('data'));
    }
    public function aboutUs()
    {
        return view('frontend.pages.about');
    }
    public function services()
    {
        $data['categories'] = ServiceCategory::all();
        return view('frontend.pages.services.index', compact('data'));
    }
    public function serviceShow($slug)
    {
        $data['category'] = ServiceCategory::where('slug', $slug)->first();
        $data['services'] = Service::where('category_id', $data['category']->id)->get();
        return view('frontend.pages.services.show', compact('data'));
    }
    public function blogs()
    {
        $blogs = Blog::all();
        return view('frontend.pages.blogs.index', compact('blogs'));
    }
    public function blogsDetails($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        $categories = ServiceCategory::all();
        return view('frontend.pages.blogs.details', compact('blog','categories'));
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function contactStore(Request $request)
    {

        // Validate the request
        $validatedData = $request->validate([
            'Name' => 'required|string',
            'conEmail' => 'required|email',
            'phone' => 'required|integer',
            'conMessage' => 'required', 
            'service' => 'required',    
        ]);

        $contact = Contact::create([
            'name' => $validatedData['Name'],
            'email' => $validatedData['conEmail'],
            'contact' => $validatedData['phone'],
            'message' => $validatedData['conMessage'], 
            'service_id' => $validatedData['service'],
        ]);

        return redirect()->back()->with('success','Thank you for contacting us. Your query submited successfully, Will Contact you soon.');
    }
}