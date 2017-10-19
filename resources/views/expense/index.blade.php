@extends('layouts.master')

@section('title')
    Expense Logger
@endsection

@section('content')

    <h3 class="text-center">Current Expenses</h3>
    <table class="table table-hover">
        <tr>
            <th>Expense</th>
            <th>Transaction Date</th>
            <th>Amount</th>
            <th>Exclude from Budget?</th>
        </tr>
        @foreach($expenses as $expense)
            <tr>
                <td>
                    <b>{{ $expense['category'] }}</b>
                    <br/>
                    {{ $expense['memo'] }}
                </td>
                <td>
                   {{ date($expense['transaction_date']) }}
                </td>
                <td>
                    {{ $expense['amount'] }}
                </td>
                <td>
                    {{ $expense['options']['exclude_from_budget'] ? 'Yes': 'No' }}
                </td>
            </tr>
        @endforeach
    </table>
    
@endsection