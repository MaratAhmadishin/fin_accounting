<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return Expense::all();
    }

    public function show(Expense $expense)
    {
        return $expense;
    }

    public function store(Request $request)
    {
        $expense = Expense::create($request->all());

        return response()->json($expense, 201);
    }

    public function update(Request $request, Expense $expense)
    {
        $expense->update($request->all());

        return response()->json($expense, 200);
    }

    public function delete(Expense $expense)
    {
        $expense->delete();

        return response()->json(null, 204);
    }
}
