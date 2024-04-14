<?php

namespace Modules\Expenses\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Expenses\Entities\ExpenseCategory;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = ExpenseCategory::orderBy('created_at','DESC')->get();

        return view('expenses::category.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenses::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ExpenseCategory::create($request->all());
        return back()->with('success', 'Added Successfully');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('expenses::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type = ExpenseCategory::findOrfail($id);
        $types = ExpenseCategory::orderBy('created_at','DESC')->get();

        return view('expenses::category.index', compact('type','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $type = ExpenseCategory::findOrfail($id);
        $type->update($request->all());
        return redirect()->route('expensescategories.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type = ExpenseCategory::findOrfail($id);
        $type->delete();
        return redirect()->route('expensescategories.index')->with('success', 'Deleted Successfully');

    }
}
