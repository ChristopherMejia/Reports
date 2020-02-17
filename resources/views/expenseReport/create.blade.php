@extends('layouts.base')

@section('content')


<div class="container">
    <div class=card>

        {{-- <div class="row" id="divTitle"> --}}
            <div class = "card-header">
                <h1>New Reports</h1>
        </div>
    {{-- </div> --}}

    <div class="row">
        <div class = "col">
            <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/expense_reports">Back</a>
        </div>
    </div>
    
    <div class="row" id="divForm">
        <div class = "col">
            <form action="/expense_reports" method="POST">
                @csrf
                <div class="form-group"> 
                    <input type="text" class="form-control" name="title" placeholder="Type Title">
                </div>
                <button class="btn btn-primary btn-block" type="submit" id="btnSubmit2">Submit</button>
            </form>   
        </div>
    </div>         
  </div>
</div>

@endsection