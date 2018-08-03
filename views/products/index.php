<?php

foreach ($products as $product): ?>
<!-- --><?php //  Debug($product->image)  ?>
    <img src="/upload/products/<?= $product->image ?>">
    <br>
<?php endforeach; ?>