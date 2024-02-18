<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Modules\Service\Entities\Service;
use Modules\Service\Entities\ServiceCategory;
use Modules\Setting\Entities\CompanyProfile;
use Modules\Slider\Entities\Slider;
use Modules\Testimonial\Entities\Testimonial;

class IndexController extends Controller
{
    public function slider()
    {
        $data['sliders'] = Slider::get();
        $data['root_image_url'] =url('upload/images/sliders/');
        if(!empty($data['sliders']))
        {
            return response()->json([
                'code' => '200',
                'status' => 'success',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'code' => '204',
                'status' => 'error',
                'message' => 'Sliders are not available'
            ]);
        }
    }
    public function about()
    {
        $data['about'] = CompanyProfile::first();
        $data['root_image_url'] =url('/upload/images/settings/');
        if(!empty($data['about']))
        {
            return response()->json([
                'code' => '200',
                'status' => 'success',
                'data' => $data
            ]);
        }
        else{
                return response()->json([
                    'code' => '204',
                    'status' => 'error',
                    'message' => 'Data is not available'
                ]);
            }
    }
    public function contactUs(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|alpha',
            'email' => 'required|email',
            'contact' => 'required|regex:/^[0-9]+$/',
            'message' => 'required',
            'service_id' => 'required|integer',
        ]);
    
        if ($validation->fails()) {
            return response()->json([
                'code' => 204,
                'status' => 'error',
                'message' => 'Validation error',
                'errors' => $validation->errors(),
            ]);
    
        } else{
        $contact =Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'contact' => $request['contact'],
            'message' => $request['message'],
            'service_id' => $request['service_id']
        ]);
        Mail::to('info@rotechinnovation.com')->send(new \App\Mail\ContactUs($contact));
        return response()->json([
            'code' => '200',
            'status' => 'success',
            'data' => $contact,
            'message' => 'Contact Created Successfully'
        ]);
    }
    }
    public function getCategories()
    {
        try {
            $data['categories'] = ServiceCategory::get();
        
            return response()->json([
                'code' => '200',
                'status' => 'success',
                'data' => $data,
                'image_url' => url('upload/images/category/'),
                'message' => 'Service Categories List.'
            ]);
        } catch (\Exception $e) {
            // Handle the exception here, you can log it or return an error response.
            return response()->json([
                'code' => '500',
                'status' => 'error',
                'message' => 'Something Went Wrong.'
            ]);
        }
    }
    public function categoryDetails(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'slug' => 'required',
        ]);
    
        if($validation->fails()){
            return response()->json([
                'code' => '204',
                'status' => 'error',
                'message' => 'Slug Required',
            ]); 
        }
        try{
            $data['category'] = ServiceCategory::where('slug',$request->slug)->first();
            $data['services'] = Service::where('category_id', $data['category']->id)->get();
            return response()->json([
                'code' => '200',
                'status' => 'success',
                'data' => $data,
                'image_url' => url('upload/images/services/'),
                'message' => 'Service Categories List.'
            ]);
        }catch(\Exception $e) {
            
                return response()->json([
                    'code' => '500',
                    'status' => 'error',
                    'message' => 'Something Went Wrong.'
                ]);
            }
    }
    public function getServices()
     {
        try{
            $data['services'] = Service::get();

            return response()->json([
                'code' => '200',
                'status' => 'success',
                'message' => 'Services List',
                'image_url' => url('upload/images/services/'),
                'data' => $data,
            ]);
        }catch(\Exception $e) {
            return response()->json([
                'code' => '500',
                'status' => 'error',
                'message' => 'Something Went Wrong !',
            ]);
        }
     }
     public function serviceDetails(Request $request)
     {
        $validation = Validator::make($request->all(),[ 
            'slug' => 'required',
        ]);
    
        if($validation->fails()){
            return response()->json([
                'code' => '204',
                'status' => 'error',
                'message' => 'Slug Required',
            ]); 
        }
        try{
            $data['service'] = Service::where('slug',$request->slug)->first();
            return response()->json([
                'code' => '200',
                'status' => 'success',
                'image_url' => url('upload/images/services/'),
                'message' => 'Service Details List...',
                'data' => $data,
            ]);
        }catch(\Exception $e) {
            return response()->json([
                'code' => '500',
                'status' => 'error',
                'message' => 'Something Went Wrong !',
            ]);
        }
     }
      public function getTestimonials()
      {
        try {
            $data['testimonials'] = Testimonial::get();
            return response()->json([
                'code' => '200',
                'status' => 'success',
                'message' => 'Testimonial List',
                'image_url' => url('upload/images/testimonilas/'),
                'data' => $data
            ]);
        } catch(\Exception $e) {
            return response()->json([
                'code' => '500',
                'status' => 'error',
                'message' => 'Something Went Wrong !',
            ]);
        }
      }
      public function subscribe(Request $request)
      {
        $validation = Validator::make($request->all(),[ 
            'email' => 'required|email',
        ]);
    
        if($validation->fails()){
            return response()->json([
                'code' => '204',
                'status' => 'error',
                'message' => 'Email Required',
            ]); 
        }
        try{
            $data['subscribe'] = Subscriber::create($request->all());
            return response()->json([
                'code' => '200',
                'status' => 'success',
                'message' => 'Subscribed successfully',
                'data' => $data['subscribe']
            ]);
        }catch(\Exception $e){
            return response()->json([
                'code' => '500',
                'status' => 'error',
                'message' => 'Something Went Wrong !',
            ]);
        }
      }
}
