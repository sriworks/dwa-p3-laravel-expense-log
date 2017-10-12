<?php

namespace App\Http\Controllers;

class ExpenseController extends Controller
{
    // Query List of expenses
    public function index()
    {
        return 'List of all expenses here.';
    }

    // create a single expense
    public function create(Request $request)
    {
        // TODO: parse request and create an expense.
        return 'Success creating an expense';
    }
}
