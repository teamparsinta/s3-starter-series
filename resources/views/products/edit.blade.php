<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <h4>Create new product</h4>
                        </div>
                        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-4">
                                <input value="{{ old('picture') }}" type="file" name="picture" id="picture">
                                @error('name') <div class="mt-1 text-danger">{{ $message }}</div> @enderror
                            </div>
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
                            <button class="btn btn-secondary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
