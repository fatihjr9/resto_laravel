<div class="row align-items-center">
    <div class="col-md-6 col-12">
        <x-molecules.product-detail.product-images :dataProductimages="$dataProduct->productImage" />
    </div>
    <div class="col-md-6 col-12 mt-2 mt-md-0">
        <x-molecules.product-detail.product-content :dataProductContent="$dataProduct" />
    </div>
</div>