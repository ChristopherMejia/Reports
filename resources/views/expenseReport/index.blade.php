@extends('layouts.base')

@section('content')
<div class = "row">
    <div class = "col">
        <h1>Create Reports</h1>
    </div>
</div>
<div>
    <div class="row">
        <div class = "col">
            <a class="btn btn-primary" href="/expense_reports/create">Create New Report</a>
        </div>
    </div>
</div>
<div>
    <div>
        <table class = "table">
            @foreach($expenseReports as $expense)
                <tr>
                    <td> {{$expense->id}}</td>
                    <td> {{$expense->title}}</td>
                    <td> {{$expense->created_at}}</td>
                    <td> {{$expense->updated_at}}</td>
                <td> <a href="/expense_reports/{{$expense->id}}/edit">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection