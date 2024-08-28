<?php

namespace Modules\Setting\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Setting\Entities\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('status','on')->get();
        return view('setting::events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setting::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|',
            'user_type' => 'required'
        ]);
        $event = new Event();
        $event->title = $request['title'];
        $event->description = $request['description'];
        $event->start_date = $request['start_date'];
        $event->user_type = $request['user_type'];
        $event->end_date = $request['end_date'];
        $event->color = $request['color'];
        $event->status = $request['status'] ?? 'on';
        $event->save();
        return redirect()->back()->with('success','Event Created Successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $events = Event::all();

        // Return the events as JSON for FullCalendar
        return response()->json($events);
        // return view('setting::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('setting::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
