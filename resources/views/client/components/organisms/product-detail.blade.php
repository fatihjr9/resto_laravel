<div class="d-flex flex-column">
    <a href="/" class="text-secondary">Kembali</a>
    <div class="row mt-4">
        <div class="col-md-6 col-12">
            <x-molecules.product-detail.product-images :dataProductimages="$dataProduct->productImage" />
        </div>
        <div class="col-md-6 col-12">
            <x-molecules.product-detail.product-content :dataProductContent="$dataProduct" />
        </div>
    </div>
</div>