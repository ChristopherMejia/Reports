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
            <p>Details ...</p>
        </div>
    </div>
     
</div>

@endsection