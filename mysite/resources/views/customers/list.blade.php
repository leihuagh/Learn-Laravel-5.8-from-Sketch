@extends('layout')

@section('head_title', 'Customer List')

@section('main_contents')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Customer List</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">
            <form action="customers" method="POST">
                <div class="pb-3">
                    <input type="text" name="name" value="{{ old('name') }}">
                    <div>{{ $errors->first('name') }}</div>
                </div>
                @csrf
                <button type="submit" class="btn btn-primary">Add Customer</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($customers as $customer)
                <li>{{ $customer->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
