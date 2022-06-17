@extends('layouts.base')

@section('content')
 <div class="row">
    <div class="col">
         <h1>Edit Report {{$report->id}}</h1>
    </div>
 </div>    
 <div class="row">
    <div class="col">
    <a href="/expense_reports/" class="btn btn-secondary">Back</a>
    </div>
</div> 
<div class="row">
    <div class="col">
      <form action="/expense_reports/{{$report->id}}" method="POST">
         @csrf
         @method('put')
         <div class="form-group">
            <label for="title">title:</label>
            <input id="title" class="form-control" type="text" name="title" placeholder="type a title">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>    
    </div>
</div>
@endsection