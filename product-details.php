<?php include 'header.php'; ?>
<?php include 'data/products.php'; ?>

<?php
$id = $_GET['id'] ?? '';
$product = null;

foreach ($products as $p) {
  if ($p['id'] === $id) {
    $product = $p;
    break;
  }
}

if (!$product) {
  echo "<div class='container'><p>Product not found</p></div>";
  include 'footer.php';
  exit;
}
?>

<section class="section">
  <div class="container product-detail">

    <div class="product-detail-grid">
      <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>">

      <div>
        <h2><?= $product['name']; ?></h2>
        <p><?= $product['short_desc']; ?></p>

        <p><strong>Price:</strong> <?= $product['price']; ?></p>
        <p><strong>Minimum Order:</strong> <?= $product['moq']; ?> Kg</p>

        <button class="btn">Send Inquiry</button>
      </div>
    </div>

    <h3>Key Features</h3>
    <ul>
      <?php foreach ($product['overview'] as $feature): ?>
        <li><?= $feature; ?></li>
      <?php endforeach; ?>
    </ul>

    <h3>Product Specifications</h3>
    <table class="spec-table">
      <?php foreach ($product['specs'] as $key => $value): ?>
        <tr>
          <td><?= $key; ?></td>
          <td><?= $value; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <h3>Export Markets</h3>
    <p><?= implode(', ', $product['markets']); ?></p>

  </div>
</section>

<?php include 'footer.php'; ?>
