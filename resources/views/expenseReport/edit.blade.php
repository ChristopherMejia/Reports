@extends('layouts.base')

@section('content')


<div class="container">
    <div class="row">
        <div class = "col">
        <h2>Edit Report:</h2>
        <p>{{$report->title}}</p>
        </div>
    </div>

    <div class="row">
        <div class = "col">
            <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/expense_reports">Back</a>
        </div>
    </div>

    <div class="row">
        <div class = "col">
            @if($errors->any())
                <div class ="alert"></div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endIf
            <form action="/expense_reports/{{$report->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group"> 
                      <input type="text" class="form-control" name="title" placeholder="Type Title">
                </div>
                <button class="btn btn-primary btn-block " type="submit" id="btnSubmit2">Submit</button>
            </form>   
        </div>
    </div>         
</div>

@endsection