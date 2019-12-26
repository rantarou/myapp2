@extends('layouts.app')

@section('title', 'Detail For ' . $customer->name)

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Detail For  {{ $customer->name }}</h1>
        <p><a href="{{ route('customers.edit',['customer' => $customer]) }}">Edit</a></p>
        <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger" type="submit"><i class="fa fa-times"></i> Delete</button>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>Name: </strong> {{ $customer->name }}</p>
        <p><strong>Email: </strong> {{ $customer->email }}</p>
        <p><strong>Company: </strong> {{ $customer->company->name }}</p>
    </div>
</div>

@if($customer->image)
    <div class="row">
    <div class="col-12"><img src="{{ asset('storage/'. $customer->image) }}" alt="" class="img-thumbnail"></div>
    </div>
@endif
@endsection