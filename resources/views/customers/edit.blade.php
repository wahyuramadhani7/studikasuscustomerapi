@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Customer</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('customers.update', $customer) }}" method="POST">
                @csrf
                @method('PUT')
                @include('customers.form')
                
                <button type="submit" class="btn btn-success">Update Customer</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection