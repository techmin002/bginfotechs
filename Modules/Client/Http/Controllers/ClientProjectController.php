<?php

namespace Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Client\Entities\Client;
use Modules\Client\Entities\ClientPayment;
use Modules\Client\Entities\ClientProject;
use Modules\Client\Entities\Package;

class ClientProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::pluck('name', 'id');
        $packages = Package::pluck('title','id');
        $projects = ClientProject::with('client','package','clientPayment')->get();
        return view('client::projects.index',compact('clients','packages','projects'));
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
        //  dd($request->all());
        $request->validate([
            'title'=> 'required|string|max:500',
            'package_id'=> 'required',
            'price' => 'required',
            'client_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);

        $imageName = '';
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('upload/images/projects'), $imageName);
        }
        $package = new ClientProject();
        $package->title = $request->title;
        $package->package_id = $request->package_id;
        $package->price = $request->price;
        $package->paid_amount = $request->paid_amount;
        $package->client_id = $request->client_id;
        $package->start_date = $request->start_date;
        $package->end_date = $request->end_date;
        // $package->image = $imageName;
        $package->save();
        if($request->paid_amount)
        {
            $clientPayment = new ClientPayment();
               $clientPayment->client_id = $request->client_id;
               $clientPayment->amount = $request->paid_amount;
               $clientPayment->package_id = $request->package_id;
               $clientPayment->project_id = $package->id;
               $clientPayment->paid_date = Carbon::now();
               $clientPayment->methods = $request->methods;
               $clientPayment->receipt = $imageName;
            $clientPayment->save();

            $payments = new Payment();
            $payments->amount = $request->paid_amount;
            $payments->methods = $request->methods;
            $payments->table = 'ClientProject';
            $payments->table_id = $package->id;
            $payments->receipt = $imageName;
            $payments->paid_date= Carbon::now();
            $payments->save();
        }
        return redirect()->route('projects.index')->with('success', 'Project Added Successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $project = ClientProject::where('id',$id)->with('clientPayments')->first();
        return view('client::projects.show',compact('project'));
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
        $request->validate([
            'title'=> 'required|string|max:500',
            'package_id'=> 'required',
            'price' => 'required',
            'client_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ]);
        $package = ClientProject::findorfail($id);
        $imageName = '';
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('upload/images/projects'), $imageName);
        }
        
        $package->title = $request->title;
        $package->package_id = $request->package_id;
        $package->price = $request->price;
        $package->paid_amount = $request->paid_amount;
        $package->client_id = $request->client_id;
        $package->start_date = $request->start_date;
        $package->end_date = $request->end_date;
        $package->save();
        
        return redirect()->route('projects.index')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $projects = ClientProject::findorfail($id);
        $clientPayment = ClientPayment::where('project_id',$projects->id)->first();
        $clientPayment->delete();
        $projects->delete();
        return redirect()->route('projects.index')->with('success', 'Project Deleted Successfully');
    }
    public function amountStore(Request $request, $id)
    {
        $projects = ClientProject::findorfail($id);
        $request->validate([
            'paid_amount'=> 'required',
            'methods'=> 'required',
            'start_date' => 'required',

        ]);
        $imageName = '';
            if ($request->hasFile('image')) {
                $imageFile = $request->file('image');
                $imageName = time() . '.' . $imageFile->getClientOriginalExtension();

                $imageFile->move(public_path('upload/images/projects'), $imageName);
            } 
            $updated_amount= $projects->paid_amount + $request->paid_amount;
            // dd($updated_amount);
        $projects->update([
            'paid_amount' => $updated_amount,
        ]);
        $clientPayment = new ClientPayment();
               $clientPayment->client_id = $projects->client_id;
               $clientPayment->amount = $request->paid_amount;
               $clientPayment->package_id = $projects->package_id;
               $clientPayment->project_id = $id;
               $clientPayment->paid_date = $request->start_date;
               $clientPayment->methods = $request->methods;
               $clientPayment->receipt = $imageName;
            $clientPayment->save();

        $payments = new Payment();
        $payments->amount = $request->paid_amount;
        $payments->methods = $request->methods;
        $payments->table = 'ClientProject';
        $payments->table_id = $id;
        $payments->receipt = $imageName;
        $payments->paid_date= $request->start_date;
        $payments->save();
        return redirect()->route('projects.index')->with('success', 'Amount Added Successfully');

    }
}
