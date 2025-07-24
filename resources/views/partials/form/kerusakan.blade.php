<div class="mb-3">
    <label for="kode" class="form-label">Kode Kerusakan</label>
    <input type="text" name="kode" id="kode" class="form-control"
        value="{{ old('kode', $kerusakan->kode ?? '') }}" required>
    @error('kode')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="nama" class="form-label">Nama Kerusakan</label>
    <input type="text" name="nama" id="nama" class="form-control"
        value="{{ old('nama', $kerusakan->nama ?? '') }}" required>
    @error('nama')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <input type="text" name="deskripsi" id="deskripsi" class="form-control"
        value="{{ old('deskripsi', $kerusakan->deskripsi ?? '') }}">
</div>

<div class="mb-3">
    <label for="solusi" class="form-label">Solusi</label>
    <textarea name="solusi" id="solusi" rows="4" class="form-control">{{ old('solusi', $kerusakan->solusi ?? '') }}</textarea>
</div>

<button class="btn btn-success">{{ $submit }}</button>
<a href="{{ route('admin.kerusakan.index') }}" class="btn btn-secondary">Kembali</a>
