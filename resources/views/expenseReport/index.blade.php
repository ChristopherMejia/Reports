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
            <a class="btn btn btn-outline-primary" href="/expense_reports/create">Create New Report</a>
        </div>
    </div>
    <br>
</div>
<div>
    <div>
        <table class = "table table-hover">
            <tr> 
                <th><span> Nombre </span></th>
                <th><span>Fecha Creacion</span></th>
                <th><span>Fecha Actualizacion</span></th>
                <th><span>Acciones</span></th>
            </tr>
            @foreach($expenseReports as $expense)
            <tr>
            <td> <a href="/expense_reports/{{$expense->id}}">{{$expense->title}}</a></td>
                <td> {{$expense->created_at}}</td>
                <td> {{$expense->updated_at}}</td>
                <td> <a class=" btn btn-outline-primary" href="/expense_reports/{{$expense->id}}/edit">Edit</a>
                <a class="btn btn-outline-danger" href="/expense_reports/{{$expense->id}}/confirmDelete">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection