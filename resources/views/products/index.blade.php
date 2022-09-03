<x-app-layout>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm mb-4">
                        <!-- @if ($product->picture) -->
                            <!-- <img src="#" class="card-img-top" alt=""> -->
                        <!-- @endif -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <div class="">
                                <sup>Rp</sup>
                                {{ number_format($product->price, 0, '.', '.') }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
