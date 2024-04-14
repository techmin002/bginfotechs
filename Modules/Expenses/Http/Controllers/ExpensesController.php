<?php

namespace Modules\Expenses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Expenses\Entities\ExpenseCategory;
use Modules\Expenses\Entities\Expenses;
use Yajra\DataTables\DataTables;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $expenses = Expenses::orderBy('created_at','DESC')->get();
        $types = ExpenseCategory::all();
        return view('expenses::expenses.index', compact('expenses','types'));
    }
  
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('expenses::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        
        
        
        $expense = new Expenses;
        $expense->expense_category_id = $request->expense_category_id;
        $expense->title = $request->title;
        $expense->amount_from = $request->amount_from;
        $expense->paid_by = $request->paid_by;
        $expense->title = $request->title;
        $expense->title = $request->title;
        $expense->amount = $request->amount;
        $expense->date = $request->date;
        $expense->mode = $request->mode;
        $expense->vendor = $request->vendor;
        if($request->file('receipt'))
        {
            $file = $request->file('receipt');
        $fileName = time().''.$file->getClientOriginalName();
        $request->receipt->move(public_path('upload/images/expenses'), $fileName);
        $expense->receipt = $fileName;

        }
        $expense->save();
        return back()->with('success','Expenses Added Successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('expenses::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('expenses::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $expense = Expenses::findOrfail($id);
        $expense->delete();
        return back()->with('success','Expenses Deleted');
    }
    public function getExpense(Request $request)
    {
        $expenses = Expenses::all(); // Replace this with your logic to fetch data (you can apply filters, sorting, etc. here)

        return response()->json($expenses);
    }
}
