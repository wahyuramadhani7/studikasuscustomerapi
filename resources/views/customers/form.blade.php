<div class="mb-3">
    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
           value="{{ old('name', $customer->name ?? '') }}" required>
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email <span class="text-danger">*</span></label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
           value="{{ old('email', $customer->email ?? '') }}" required>
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
    <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" 
           value="{{ old('phone_number', $customer->phone_number ?? '') }}" required>
    @error('phone_number')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3">{{ old('address', $customer->address ?? '') }}</textarea>
    @error('address')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>