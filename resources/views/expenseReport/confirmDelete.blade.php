@extends('layouts.base')

@section('content')


<div class="container">
    <div class="row">
        <div class = "col">
        <h1>Delete Report {{$report->id}}</h1>
        </div>
    </div>

    <div class="row">
        <div class = "col">
            <a class="btn btn-secondary" id="btnSubmit1" href="/expense_reports">Back</a>
        </div>
    </div>

    <div class="row">
        <div class = "col">
            <form action="/expense_reports/{{$report->id}}" method="POST">
                @csrf
                @method('put')
                <table class="table">
                    <tr>
                        <td> {{$report->id}}</td>
                        <td> {{$report->title}}</td>
                        <td> {{$report->created_at}}</td>
                        <td> {{$report->updated_at}}</td>
                    </tr>
                </table> 
        </div>
    </div>         
</div>

@endsection