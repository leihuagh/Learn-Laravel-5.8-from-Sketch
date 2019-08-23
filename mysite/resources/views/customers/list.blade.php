@extends('layout')

@section('head_title', 'Customer List')

@section('main_contents')
<h2>Customer List</h2>

<ul>
    @foreach ($customers as $customer)
    <li>{{ $customer }}</li>
    @endforeach
</ul>

@endsection
