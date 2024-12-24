<!-- begin item.inc.php -->
<?php
// Dummy data
$item = [
    'thumbnail' => 'path/to/dummy-image.jpg',
    'rating' => 4.5,
    'brand' => 'Dummy Brand',
    'title' => 'Dummy Item Title',
    'price' => 1000,
    'discountPercentage' => 20,
    'quantity' => 10,
];
$elementFound = true; // Change this value based on your logic
?>

<div class="item-container">
    <img class="item-image" src="<?= $item['thumbnail']; ?>" alt="item image" />
    <div class="rating"><?= $item['rating']; ?> ⭐</div>
    <div class="company-name"><?= $item['brand']; ?></div>
    <div class="item-name"><?= $item['title']; ?></div>
    <div class="price">
        <span class="current-price">Rs <?= number_format($item['price'] * (1 - $item['discountPercentage'] / 100), 2); ?></span>
        <span class="original-price">Rs <?= $item['price']; ?></span>
        <span class="discount">(-<?= $item['discountPercentage']; ?>%)</span>
        <div class="stock">
            Available items:
            <span class="stock_quantity"><?= $item['quantity']; ?></span>
        </div>
    </div>

    <?php if ($elementFound): ?>
        <button type="button" class="btn btn-remove-bag btn-danger" onclick="handleRemove()">
            <i class="del_icon AiFillDelete"></i> Del
        </button>
    <?php elseif ($item['quantity'] > 0): ?>
        <button type="button" class="btn btn-add-bag btn-success" onclick="handleAddToBag()">
            <i class="add_icon GrAddCircle"></i> Buy
        </button>
    <?php else: ?>
        <button type="button" class="btn btn-add-bag btn-warning stock">
            Wish
        </button>
    <?php endif; ?>
</div>
<!-- end item.inc.php -->
