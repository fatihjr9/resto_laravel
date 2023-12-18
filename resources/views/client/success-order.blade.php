<x-template.layout title="{{ $title }}" >
  <x-organisms.navbar :path="$shop->path"/>
    <div class="container py-y d-flex flex-column align-items-center gap-3 mb-2">
      <img src="{{ asset('client/img/success-order.png') }}" class="mt-4" style="width:20rem;height:auto;">
      <div class="d-flex flex-column text-center">
        <h4 class="mb-2">Pesanan segera di proses</h4>
        <p class="mb-0" style="font-size: 1rem;">Dimohon membayar sesuai jumlah yang tertera</p>
      </div>
      <div class="d-flex align-items-center px-4 py-2 rounded-2" style="background: #fafafa;">
        <p class="mb-0 me-4">Total Pembayaran : <b class="text-success">Rp {{ $total }}</b></p>
        <a href="{{ $payment->url_payment }}" class="btn btn-primary">Bayar</a>
      </div>
      <div class="d-flex align-items-center justify-content-between pt-2" style=" border-top: 1px solid #c0c0c0;">
        <p id="orderCode" class="text-secondary mb-0">{{ $order_code }}</p>
        <p class="mb-0 mx-2">-</p>
        <button id="copyToClipboardBtn" class="btn p-0">Salin kode</button>
      </div>      
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var orderCodeElement = document.getElementById('orderCode');
        var copyToClipboardBtn = document.getElementById('copyToClipboardBtn');
    
        copyToClipboardBtn.addEventListener('click', function () {
          copyToClipboard(orderCodeElement.innerText);
        });
    
        function copyToClipboard(text) {
          var dummyElement = document.createElement('textarea');
          dummyElement.value = text;
          document.body.appendChild(dummyElement);
          dummyElement.select();
          document.execCommand('copy');
          document.body.removeChild(dummyElement);
    
          // You can provide some visual feedback to the user (optional)
          copyToClipboardBtn.innerHTML = 'Kode tersalin';
          setTimeout(function () {
            copyToClipboardBtn.innerHTML = 'Salin Kode';
          }, 2000);
        }
      });
    </script>
</x-template.layout>