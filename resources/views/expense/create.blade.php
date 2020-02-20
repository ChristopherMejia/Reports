@extends('layouts.base')

@section('content')


<div class="container">
    <div class=card>

        {{-- <div class="row" id="divTitle"> --}}
            <div class = "card-header">
                <h1>New Expense</h1>
        </div>
    {{-- </div> --}}

    <div class="row">
        <div class = "col">
        <a class="btn btn-secondary btn-block" href="/expense_reports/{{$report->id}}">Back</a>
        </div>
    </div>
    
    <div class="row" id="divForm">
        <div class = "col">
            @if($errors->any())
                <div class = "alert"> </div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
                @csrf
                <div class="form-group"> 
                    <input type="text" class="form-control" name="description" placeholder="Type Description" value="{{old('description')}}"><br>
                    <input type="text" class="form-control" name="amount" placeholder="Type Amount" value="{{old('amount')}}">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </form>   
        </div>
    </div>         
  </div>
</div>

@endsection