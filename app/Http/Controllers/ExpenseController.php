<?php

namespace App\Http\Controllers;

use App\ExpenseManagement\ExpenseDAO;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    private $expenseDAO;

    public function __construct()
    {
        $this->expenseDAO = new ExpenseDAO(database_path('expenses.json'));
    }

    /**
     * Public Controller Method to handle index page.
     *
     * @param request - Http Request
     */
    public function index()
    {
        return view('expense.index')->with([
            'expenses' => $this->expenseDAO->getAllExpenses(),
        ]);
    }

    /**
     * Public Controller Method to handle create expense request.
     *
     * @param request - Http Request
     */
    public function create(Request $request)
    {
        // Validate the input
        $this->validate($request, [
            'transaction_date' => 'required|date',
            'amount' => 'required|numeric', ]);

        // Create expense
        $expense = array(
            'category' => $request->input('category', ''),
            'memo' => $request->input('memo', ''),
            'options' => array('exclude_from_budget' => $request->input('exclude_from_budget', 'No')),
            'amount' => $request->input('amount', ''),
            'transaction_date' => $request->input('transaction_date', ''), );

        $this->expenseDAO->createNewExpense($expense);

        // Redirect to index page.
        return redirect('./')->with([
                'message' => array('message_text' => 'Expense Created Successfully', 'severity' => 'success'),
            ]);
    }
}
