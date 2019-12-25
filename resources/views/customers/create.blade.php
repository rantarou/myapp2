@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>New Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{ route('customers.store') }}" method="post">
            @include('customers.form')
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Add Customer</button>         
        </form>
    </div>
</div>
@endsection