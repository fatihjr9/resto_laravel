<x-template.layout title="Restoran Soto Kudus">
  <div class="d-flex flex-column justify-content-between h-100">
    <x-organisms.navbar cartCount=10 :path="$shop->path"/>
    <img style="height: 20rem; background-position: center; object-fit: cover; background-repeat: no-repeat; z-index:0;" class="w-100 img-fluid" src="{{ asset('/cover.jpg') }}" alt="">
    <div class="container my-4">
      <h5 class="fs-4 mb-4">Menu</h5>
      <x-organisms.products :dataProduct="$product">
        <x-slot:productCTA>
          <div class="pt-5">
            {{ $product->links('vendor.pagination.bootstrap-5') }}
          </div>
        </x-slot:productCTA>
      </x-organisms.products>
    </div>
    <x-organisms.footer :shop="$shop"/>
  </div>
</x-template.layout>