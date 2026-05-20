@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Daftar Customer</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">+ Tambah Customer Baru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone_number }}</td>
                <td>{{ Str::limit($customer->address, 50) }}</td>
                <td>
                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $customers->links() }}
</div>
@endsection