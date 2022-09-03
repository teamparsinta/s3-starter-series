@csrf
<div class="mb-4">
    <label class="form-label" for="name">Name</label>
    <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
    @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="mb-4">
    <label class="form-label" for="price">Price</label>
    <input value="{{ old('price') }}" type="number" name="price" id="price" class="form-control @error('name') is-invalid @enderror">
    @error('price') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="mb-4">
    <label class="form-label" for="description">Description</label>
    <textarea name="description" id="description" class="form-control @error('name') is-invalid @enderror">{{ old('description') }}</textarea>
    @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
</div>
