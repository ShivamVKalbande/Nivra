<?php include 'header.php'; ?>
<?php include 'data/products.php'; ?>

<section class="section" style="background:#fafafa">
  <div class="container">
    <h2>Red Chilli Products</h2>

    <div class="products">
      <?php foreach ($products as $product): ?>
        <div class="product-card">
          <div class="product-image">
            <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>">
          </div>

          <div class="product-content">
            <h3><?= $product['name']; ?></h3>
            <p><?= $product['short_desc']; ?></p>
            <p><strong>Price:</strong> <?= $product['price']; ?></p>
            <p><strong>MOQ:</strong> <?= $product['moq']; ?> Kg</p>

            <a href="product-details.php?id=<?= $product['id']; ?>" class="btn">
              View Details
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
