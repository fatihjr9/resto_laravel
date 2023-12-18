<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar cartCount=10 :path="$shop->path"/>
    <div class="container pt-md-5 pt-3">
      <x-organisms.product-detail :dataProduct="$product" />
    </div>
    <x-organisms.products :dataProduct="$recomendationProducts">
      <h1 class="pb-3 mt-2 fs-5">Menu Lainnya</h1>
  </x-organisms.products>
  <x-organisms.footer :shop="$shop"/>
</x-template.layout>