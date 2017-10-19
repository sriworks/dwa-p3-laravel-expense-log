<?php

namespace App\Http\Controllers;

use App\ExpenseManagement\ExpenseDAO;

class ExpenseController extends Controller
{
    private $expenseDAO;

    public function __construct()
    {
        $this->expenseDAO = new ExpenseDAO(database_path('expenses.json'));
    }

    // Query List of expenses
    public function index()
    {
        return view('expense.index')->with([
            'expenses' => $this->expenseDAO->getAllExpenses(),
        ]);
    }

    // create a single expense
    public function create(Request $request)
    {
        // TODO: parse request and create an expense.
        return view('expense.create');
    }
}
