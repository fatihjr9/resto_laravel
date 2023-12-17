<x-template.layout title="Restoran Soto Kudus">
  <x-organisms.navbar cartCount=10 :path="$shop->path"/>
  <x-organisms.products :dataProduct="$product">
    <x-slot:productCTA>
      <div class="pt-5">
        {{ $product->links('vendor.pagination.bootstrap-5') }}
      </div>
    </x-slot:productCTA>
  </x-organisms.products>
</x-template.layout>