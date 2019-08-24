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
            <ul>
                @foreach ($customers as $customer)
                <li>{{ $customer->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
