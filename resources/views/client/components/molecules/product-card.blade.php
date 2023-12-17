<div class="col-md-3 col-6">
    <a href="{{ route('clientProductDetail', $title) }}">
        <div class="card" style="border: 1px solid #c0c0c0;">
            @foreach ($image->take(1) as $item)
                <img src="{{ asset('shop/products/'. $item->path) }}" alt="" class="card-img-top" style="height: 10rem;">
            @endforeach
            <div class="p-3">
                {{-- <p class="mb-0"><small>{!! str_replace('-', ' ', ucwords($category)) !!}</small></p> --}}
                <p class="fw-bolder mb-0 fs-5 text-black">{!! str_replace('-', ' ', ucwords($title)) !!}</p>
                <p class="mb-0 text-secondary">Rp {{ $price }}</p>
            </div>
        </div>
    </a>
</div>