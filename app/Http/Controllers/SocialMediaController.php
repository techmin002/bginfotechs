<?php

namespace App\Http\Controllers;

use App\Models\SocialMediaRequest;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function socialMediaMarketing()
    {
        return view('frontend.pages.social-media-marketing');
    }
    public function socialMediaMarketingStore(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|integer',

        ]);

        $contact = SocialMediaRequest::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'package' => $request['package'] ?? null,
            'no_graphics' => $request['no_graphics'] ?? null,
            'no_videos' => $request['no_videos'] ?? null,
            'business_category' => $request['business_category'] ?? null,
            'status' => $request['status'] ?? 'pending',
        ]);

        return redirect()->back()->with('success','Your Social Media Marketing request submited successfully, Our Team will Contact you soon.');
    }
    public function smmRequest()
    {

        $smms = SocialMediaRequest::all();
        return view('backend.pages.smm-request', compact('smms'));
    }
}
