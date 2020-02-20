@extends('layouts.base')

@section('content')


<div class="container">
    <div class=card>

        {{-- <div class="row" id="divTitle"> --}}
            <div class = "card-header">
                <h1>Confirm send email</h1>
        </div>
    {{-- </div> --}}

    <div class="row">
        <div class = "col">
        <a class="btn btn-secondary btn-block" id="btnSubmit1" href="/expense_reports/{{$report->id}}">Back</a>
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
            <form action="/expense_reports/{{$report->id}}/sendEmail" method="POST">
                @csrf
                <div class="form-group"> 
                    <input type="email" class="form-control" name="email" placeholder="Type Email" value="{{old('email')}}">
                </div>
                <button class="btn btn-primary btn-block" type="submit" id="btnSubmit2">Send email</button>
            </form>   
        </div>
    </div>         
  </div>
</div>

@endsection