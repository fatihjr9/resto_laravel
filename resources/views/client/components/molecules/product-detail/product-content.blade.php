
@push('css')
  <style>
    .autosize:focus{
      box-shadow:none !important;
    }
    
    #plus{
      border: 1px solid #f4f4f4;
      color: orange;
    }
    #moins{
      border: 1px solid #f4f4f4;
      color: orange;
    }
    #count{
      border: 1px solid #f2f2f2;
      background: #fafafa;
      color: orange;
    }
    #plus:hover{
      background-color: orange;
      border: none;
      color: white;
    }
    #moins:hover{
      background-color: orange;
      border: none;
      color: white;
    }

    @media screen and (max-width: 767px){
      #input_div{
        display:flex;
        justify-content:space-between;
        gap:10px;
      }

      .add-to-cart, #count{
        width:100% !important;  
      }
    }

    #count{
      width:100px;
    }
    .btn-orange {
      background-color: orange;
    }
  </style>
@endpush

<div class="w-100 border p-3 bg-white shadow-sm rounded-2">
    <h3 class="mt-md-0 mt-4">{!! str_replace('-', ' ', ucwords($dataProductContent->title)) !!}</h3>
    <p class="text-secondary">Rp {{$dataProductContent->price}}</p>
    <p>{{$dataProductContent->desc}}</p>
    <div class="d-flex flex-row align-items-center justify-content-between">
      <p class="mb-0"><b>Stock : {{$dataProductContent->stock}}</b></p>
      @if($dataProductContent->stock !== 0)
      <div id="input_div">
          <input type="button" value="-" id="moins" onclick="minus()" class="btn btn-outline-primary">
          <input type="text" value="1" id="count" class="btn btn-outline-primary font-secondary" disabled>
          <input type="button" value="+" id="plus" data-stok="{{$dataProductContent->stock}}" onclick="plus()" class="btn btn-outline-primary">
      </div>
    </div>
    <button class="btn btn-orange btn-small font-secondary mt-4 add-to-cart text-white w-100" data-id-product="{{$dataProductContent->id}}" data-quantity="1">Tambahkan</button>
    @endif
</div>
@push('js')
    <script>
      autosize();
      function autosize(){
          var text = $('.autosize');

          text.each(function(){
              $(this).attr('rows',1);
              resize($(this));
              this.style.overflow = 'hidden';
              this.style.backgroundColor = 'transparent';
              this.style.padding = '0';
              this.style.border = 'none';
              this.style.resize = 'none';
          });

          text.on('input', function(){
              resize($(this));
          });
          
          function resize ($text) {
              $text.css('height', 'auto');
              $text.css('height', $text[0].scrollHeight+'px');
          }
      }

      var count = 1;
      var countEl = document.getElementById("count");

      function plus(){
        let stok = $('#plus').attr('data-stok');
        if(stok == 0){
          count++;
          countEl.value = count;
          $('.add-to-cart').attr('data-quantity', count);
        }else{
          if(count < stok){
            count++;
            countEl.value = count;
            $('.add-to-cart').attr('data-quantity', count);
          }
        }
      }

      function minus(){
        if (count > 1) {
          count--;
          countEl.value = count;
          $('.add-to-cart').attr('data-quantity', count);
        }  
      }

      $(".add-to-cart").click(function (e) {
        let product_id =  $(this).attr("data-id-product");
        let quantity = $(this).attr("data-quantity");

        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
          type: "POST",
          dataType: "json",
          data: {"_token": "{{ csrf_token() }}", product_id: product_id, quantity : quantity},
          url : '{{ route("clientAddToCart") }}',
          success: function(data){
            $('#cartCount').text(data.cartCount);
            countEl.value = 1;
            count = 1;
          },
          statusCode: {
            200: () => {
              Toastify({
                text: "Success Add To Cart",
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#4fbe87",
              }).showToast();
            },
            201: () => {
              Toastify({
                text: "Success Updated Quantity To Cart",
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#4fbe87",
              }).showToast();
            },
            202: () => {
              Toastify({
                text: "This Product Max Quantity To Cart",
                duration: 3000,
                close:true,
                gravity:"top",
                position: "right",
                backgroundColor: "#f3616d",
              }).showToast();
            }
          }
        })
      });
    </script>
@endpush