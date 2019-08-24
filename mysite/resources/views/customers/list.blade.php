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
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    <div>{{ $errors->first('email') }}</div>
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
