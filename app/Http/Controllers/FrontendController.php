<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use Modules\Service\Entities\Service;
use Modules\Service\Entities\ServiceCategory;

class FrontendController extends Controller
{
    public function aboutUs()
    {
        return view('frontend.pages.about');
    }
    public function services()
    {
        $data['categories'] = ServiceCategory::all();
        return view('frontend.pages.services.index',compact('data'));
    }
    public function serviceShow($slug)
    {
        $data['category'] = ServiceCategory::where('slug',$slug)->first();
        $data['services'] = Service::where('category_id',$data['category']->id)->get();
        return view('frontend.pages.services.show', compact('data'));
    }
    public function blogs()
    {
        $blogs = Blog::all();
        return view('frontend.pages.blogs.index', compact('blogs'));
    }
    public function blogsDetails()
    {
        $blog = Blog::first();
        return view('frontend.pages.blogs.details', compact('blog'));
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
}
