<?php

namespace Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Modules\Client\Entities\Client;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('access_user_management'), 403);
        $clients = Client::with('user')->latest()->get();
        return view('client::clients.index', compact('clients'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client::clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:255|confirmed',
            'phone_no'     => 'required|min:10|max:10',
            'company_name'     => 'required',
            
        ]);
      
        $imageName = '';
        if ($request->company_logo)
        {
            $imageName = time().'.'.$request->company_logo->extension();

            $request->company_logo->move(public_path('upload/images/clients'), $imageName);

        }
        $role_id = Role::where('name','Client')->first();
        // dd($role_id);
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'image'    => $imageName,
            'role_id'    => $role_id->id,
            'status' => $request->status
        ]);

        $user->assignRole('8');
        $Clients = Client::create([
            'name' => $request['name'],
            'company_name' => $request['company_name'],
            'user_id' => $user->id,
            'phone_no' => $request['phone_no'],
            'company_address' => $request['address'],
            'company_phone' => $request['company_phone'],
            'company_logo'    => $imageName,
            'pan_vat' => $request['pan_vat'],
            'company_details' => $request['company_details'],
            'company_state' => 'hold',
            'status' => $request->status,
        ]);
        
        return redirect()->route('clients.index')->with('success', 'Client Added Successfully');

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
        $client= Client::where('id',$id)->with('user')->first();
        return view('client::clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone_no'     => 'required|min:10|max:10',
            'company_name'     => 'required',
            
        ]);
        $client = Client::findOrfail($id);
        $user = User::where('id',$client->user_id)->first();
        $imageName = $user->image;
        if ($request->company_logo)
        {
            $imageName = time().'.'.$request->company_logo->extension();

            $request->company_logo->move(public_path('upload/images/clients'), $imageName);

        }
       
        
            $user->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'image'    => $imageName,
            'status' => $request->status
        ]);

        $client->update([
            'name' => $request['name'],
            'company_name' => $request['company_name'],
            'phone_no' => $request['phone_no'],
            'company_address' => $request['address'],
            'company_phone' => $request['company_phone'],
            'company_logo'    => $imageName,
            'pan_vat' => $request['pan_vat'],
            'company_details' => $request['company_details'],
            'status' => $request->status,
        ]);
        
        return redirect()->route('clients.index')->with('success', 'Client Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client= Client::findorFail($id);
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client Deleted Successfully');
    }
}
