@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customers List</h1>
        <p><a href="{{ route('customers.create') }}">Add New Customer</a></p>
    </div>
</div>

{{-- <div class="row">
    <div class="col-6">
        <h3>Active Customer</h3>
        <ul> 
            @foreach($activeCustomers as $customer)
                <li>{{ $customer->name }} <span class="text-muted">({{ $customer->company->name }})</span></li>
            @endforeach
        </ul>
    </div>
    <div class="col-6">
        <h3>Inactive Customer</h3>
        <ul>
            @foreach($inactiveCustomers as $customer)
                <li>{{ $customer->name }} <span class="text-muted">({{ $customer->company->name }})</span></li>
            @endforeach
        </ul>
    </div>
</div> --}}
@foreach($customers as $customer)
    <div class="row">
        <div class="col-2">
            {{ $customer->id }}
        </div>
    <div class="col-4">
        <a href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->name }}</a>
    </div>
    <div class="col-4">{{ $customer->company->name }}</div>
    <div class="col-2">{{ $customer->active }}</div>
    </div>
@endforeach
@endsection
