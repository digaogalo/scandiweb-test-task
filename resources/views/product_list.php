<html>
<body>
<div class="row isotope-grid main-grid">
    <?php foreach ($allProducts as $row): ?>
        <div class="card hover-overlay hover-zoom hover-shadow ripple">
            <input type="checkbox" onchange="check_active()" class="delete-checkbox" name="delete[]" value="<?= $row->getSlug("SKU") ?>&<?= $row->productType ?>" id="delete-checkbox">
            <a href="resources/views/edit-product?SKU=<?= $row->getSlug("SKU") ?>&type=<?= $row->productType ?>"></a>
            <span><?= $row->SKU ?></span>
            <span><?= $row->Name ?></span>
            <span><?= $row->Price ?> $</span>
            <span><?= $row->attributeString() ?></span>
        </div>
    <?php endforeach; ?>
</div>
</body>

</html>
