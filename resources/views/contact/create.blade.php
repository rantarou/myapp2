@extends('layout')

@section('title', 'Contact Us')

@section('content')
<h1>Contact Us</h1>

@if( ! session()->has('message'))
    <form action="/contact" method="post" class="pb-5">
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            <div>{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group">
            <label for="name" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
            <div>{{ $errors->first('email') }}</div>
        </div>

        <div class="form-group">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
            <div>{{ $errors->first('message') }}</div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
        @csrf
    </form>
@endif
@endsection
