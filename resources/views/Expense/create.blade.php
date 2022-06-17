@extends('layouts.base')

@section('content')
 <div class="row">
    <div class="col">
         <h1>New Expense</h1>
    </div>
 </div>    
 <div class="row">
    <div class="col">
    <a href="/expense_reports/{{$report->id}}" class="btn btn-secondary">Back</a>
    </div>
</div> 
<div class="row">
    <div class="col">
      @if($errors->any())
         <div class="alert alert-danger">
            <ul>
               @foreach($errors->all() as $error)
               <li>{{$error}}</li>
               @endforeach
               </ul>
         </div>
      @endif
      <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
         @csrf
         <div class="form-group">
            <label for="description">Description:</label>
            <input id="description" class="form-control" type="text" name="description" placeholder="type a description" value="{{old('description')}}">
         </div>
         <div class="form-group">
            <label for="amount">Amount:</label>
            <input id="amount" class="form-control" type="number" name="amount" placeholder="type an amount" value="{{old('amount')}}">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>    
    </div>
</div>
@endsection