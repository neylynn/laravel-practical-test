@extends('customers.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Practical Test</h2>
            </div>
            <div class="pull-right" style="margin-bottom:20px; margin-top:10px;">
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Create New Customer</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Date of birth</th>
            <th>Gender</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->dob }}</td>
            <td>{{ $customer->gender == '0' ? 'Male' : 'Female' }}</td>
        </tr>
        @endforeach
    </table>
  
    {!! $customers->links() !!}
      
@endsection