<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar :path="$shop->path"/>
    <div class="container py-y d-flex flex-column align-items-center gap-3">
      <img src="{{ asset('client/img/success-order.png') }}" class="mt-4" style="width:20rem;height:auto;">
      <div class="text-center">
        <h4>Ditunggu pesanannya ya</h4>
        <p>Kode Pemesanan : <b class="text-danger">{{ $order_code }}</b></p>
      </div>
      <a href="{{ route('clientCheckOrder') }}" class="btn btn-primary">Check Order Now</a>
    </div>
</x-template.layout>