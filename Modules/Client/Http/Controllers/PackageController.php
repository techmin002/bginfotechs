<?php

namespace Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Client\Entities\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('client::packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'title'     => 'required|string|max:500',
            'package_category'    => 'required',
            'price' => 'required',
            'duration'     => 'required',

        ]);

        $imageName = '';
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('upload/images/packages'), $imageName);
        }
        $package = new Package();
        $package->title = $request->title;
        $package->package_category = $request->package_category;
        $package->price = $request->price;
        $package->duration = $request->duration;
        $package->description = $request->description;
        $package->image = $imageName;
        $package->save();
        return redirect()->route('packages.index')->with('success', 'Package Added Successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('client::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('client::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // dd($request->all());
        $package = Package::findOrfail($id);
        $request->validate([
            'title'     => 'required|string|max:500',
            'package_category'    => 'required',
            'price' => 'required',
            'duration'     => 'required',

        ]);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
        
            $imageFile->move(public_path('upload/images/packages'), $imageName);
        } else {
            $imageName = $package->image;
        }
        
        $package->update([
            $package->title = $request->title,
            $package->package_category = $request->package_category,
            $package->price = $request->price,
            $package->duration = $request->duration,
            $package->description = $request->description,
            $package->image = $imageName
        ]);
        return redirect()->route('packages.index')->with('success', 'Package Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $package = Package::findOrfail($id);
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package Deleted Successfully');
    }
}
