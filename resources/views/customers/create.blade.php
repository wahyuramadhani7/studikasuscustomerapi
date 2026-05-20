@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Tambah Customer Baru</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                @include('customers.form')
                
                <button type="submit" class="btn btn-success">Simpan Customer</button>
                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection