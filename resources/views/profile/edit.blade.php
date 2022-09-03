<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <h4>Edit profile</h4>
                        </div>
                        <form action="{{ route('products.store') }}" method="post">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload secret document</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
