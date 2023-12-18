<div class="py-4" style="border-top: 1px solid #f4f4f4;">
    <div class="d-flex align-items-center justify-content-between container">
        <img style="width: 2rem;" src="{{ asset('shop/'.$shop->path) }}" alt="">
        <div class="d-flex align-items-center">
            <p class="mb-0 me-2 text-secondary">Aplikasi ini menggunakan</p>
            <img style="width: 6rem;" src="{{ asset('Midtrans.svg') }}" alt="">
        </div>
        {{-- <p class="mb-0">&#169; {{ now()->year }} {{ $shop->name_shop }}</p> --}}
    </div>
</div>