<div class="row">
    <div class="col-md-4 col-12">
        <x-molecules.product-detail.product-images :dataProductimages="$dataProduct->productImage" />
    </div>
    <div class="col-md-8 col-12">
        <x-molecules.product-detail.product-content :dataProductContent="$dataProduct" />
    </div>
</div>