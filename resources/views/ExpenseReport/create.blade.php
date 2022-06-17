@extends('layouts.base')

@section('content')
 <div class="row">
    <div class="col">
         <h1>New Report</h1>
    </div>
 </div>    
 <div class="row">
    <div class="col">
    <a href="/expense_reports/" class="btn btn-secondary">Back</a>
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
      <form action="/expense_reports" method="POST">
         @csrf
         <div class="form-group">
            <label for="title">title:</label>
            <input id="title" class="form-control" type="text" name="title" placeholder="type a title" value="{{old('title')}}">
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>    
    </div>
</div>
@endsection