@extends('layouts.base')

@section('content')


<div class="container">
    <div class="row">
        <div class = "col">
        <h2>Details Report: </h2>
        <p>{{$report->title}}</p>
        </div>
    </div>

    <div class="row">
        <div class = "col">
        <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/expense_reports">Back</a>
        </div>
    </div>

    <div class="row">
        <div class ="col">
            <table class="table table-hover">
                <tr> 
                    <th><span>Description </span></th>
                    <th><span>Amount</span></th>
                    <th><span>Fecha Creacion</span></th>
                    <th><span>Fecha Actualizacion</span></th>
                </tr>
                @foreach ($report->expenses as $expense)
                    <tr>
                        <td>{{$expense->description}}</td>
                        <td>{{$expense->amount}}</td>
                        <td> {{$expense->created_at}}</td>
                        <td> {{$expense->updated_at}}</td>
                    </tr>
                @endforeach 
            </table>
            <div class = "row">
                <div class = "col">
                <a class ="btn btn-primary btn-block" href ="/expense_reports/{{$report->id}}/expenses/create">Create Expense</a>
                </div>
            </div>

        </div>
    </div>
     
</div>

@endsection