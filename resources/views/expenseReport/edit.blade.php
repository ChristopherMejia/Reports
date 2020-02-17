@extends('layouts.base')

@section('content')


<div class="container">
    <div class="row">
        <div class = "col">
        <h1>Edit Report {{$report->title}}</h1>
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
                <div class="form-group"> 
                      <input type="text" class="form-control" name="title" placeholder="Type Title">
                </div>
                <button class="btn btn-primary " type="submit" id="btnSubmit2">Submit</button>
            </form>   
        </div>
    </div>         
</div>

@endsection