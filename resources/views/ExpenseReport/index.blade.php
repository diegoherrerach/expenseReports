@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
    <div class="col">
         <h1>Reports</h1>
    </div>
 </div>    
 <div class="row">
    <div class="col">
    <a href="/expense_reports/create" class="btn btn-primary">Create a new report</a>
    </div>
</div> 
<div class="row">
    <div class="col">
             <table class="table">
                @foreach($expenseReports as $expenseReport)
                <tr>
                <td><a href="/expense_reports/{{$expenseReport->id}}">{{ $expenseReport->title }}</td> 
                <td><a href="/expense_reports/{{$expenseReport->id}}/edit">Edit</td>   
                <td><a href="/expense_reports/{{$expenseReport->id}}/confirmDelete">Delete</td> 
            </tr>
                @endforeach
             </table>
    </div>
</div>
</div>
@endsection