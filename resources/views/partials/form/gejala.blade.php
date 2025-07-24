<div class="mb-3">
    <label for="kode" class="form-label">Kode Gejala</label>
    <input type="text" name="kode" id="kode" class="form-control" value="{{ old('kode', $gejala->kode ?? '') }}"
        required>
    @error('kode')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="nama" class="form-label">Nama Gejala</label>
    <input type="text" name="nama" id="nama" class="form-control"
        value="{{ old('nama', $gejala->nama ?? '') }}" required>
    @error('nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<button class="btn btn-success">{{ $submit }}</button>
<a href="{{ route('admin.gejala.index') }}" class="btn btn-secondary">Kembali</a>
