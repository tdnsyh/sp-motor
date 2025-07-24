{{-- Digunakan oleh create dan edit --}}
<div class="mb-3">
    @isset($showKodeRule)
        <label for="kode_rule" class="form-label">Kode Rule</label>
        <input type="text" name="kode_rule" id="kode_rule" class="form-control"
            value="{{ old('kode_rule', $kode_rule ?? '') }}" required>
        @error('kode_rule')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    @else
        <input type="hidden" name="kode_rule" value="{{ $kode_rule }}">
    @endisset
</div>

<div class="mb-3">
    <label for="kerusakan_id" class="form-label">Kerusakan</label>
    <select name="kerusakan_id" id="kerusakan_id" class="form-select" required>
        <option value="">-- Pilih Kerusakan --</option>
        @foreach ($kerusakan as $k)
            <option value="{{ $k->id }}"
                {{ old('kerusakan_id', $kerusakan_id ?? '') == $k->id ? 'selected' : '' }}>
                {{ $k->kode }} - {{ $k->nama }}
            </option>
        @endforeach
    </select>
    @error('kerusakan_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Gejala</label>
    <div class="row">
        @foreach ($gejala as $g)
            <div class="col-md-4">
                <div class="form-check">
                    <input type="checkbox" name="gejala_ids[]" value="{{ $g->id }}"
                        id="gejala_{{ $g->id }}" class="form-check-input"
                        {{ in_array($g->id, old('gejala_ids', $selected_gejala ?? [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="gejala_{{ $g->id }}">
                        {{ $g->kode }} - {{ $g->nama }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
    @error('gejala_ids')
        <small class="text-danger d-block">{{ $message }}</small>
    @enderror
</div>

<button class="btn btn-success">{{ $submit ?? 'Simpan' }}</button>
<a href="{{ route('admin.rule.index') }}" class="btn btn-secondary">Kembali</a>
