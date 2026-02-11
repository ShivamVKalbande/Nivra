<?php 
include 'header.php'; 
include 'data/products.php'; 

$id = isset($_GET['id']) ? trim($_GET['id']) : '';

if (empty($id)) {
    header('Location: products.php');
    exit;
}

$product = getProductById($id);

if (!$product) {
    ?>
    <section class="section">
        <div class="container" style="text-align: center; padding: 80px 20px;">
            <h2 style="color: #033d7b;">Product Not Found</h2>
            <p style="margin: 20px 0;">The product you're looking for doesn't exist.</p>
            <a href="products.php" class="btn">Back to Products</a>
        </div>
    </section>
    <?php
    include 'footer.php';
    exit;
}
?>

<section class="section product-details-section">
    <div class="container product-detail">

        <div class="product-detail-grid">
        <div class="product-image-detail">
    <img src="<?= htmlspecialchars($product['image']); ?>" 
         alt="<?= htmlspecialchars($product['name']); ?>"
         loading="lazy"
         onerror="this.src='images/placeholder.jpg'">
</div>

            <div class="product-quick-info">
                <h1 class="product-title"><?= htmlspecialchars($product['name']); ?></h1>
                <p class="product-category">Category: Spices</p>
                <p class="product-description"><?= htmlspecialchars($product['short_desc']); ?></p>

                <div class="price-box">
                    <div class="price-item">
                        <span class="label">Price:</span>
                        <span class="value price-value"><?= htmlspecialchars($product['price']); ?></span>
                    </div>
                    <div class="price-item">
                        <span class="label">Minimum Order:</span>
                        <span class="value moq-value"><?= htmlspecialchars($product['moq']); ?> Kg</span>
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="index.php#contact" class="btn btn-primary">Send Inquiry</a>
                    <a href="tel:+918871713115" class="btn btn-primary">Call Export Manager</a>
                </div>
            </div>
        </div>

        <?php if (!empty($product['overview'])): ?>
            <div class="detail-section">
                <h2 class="section-title">Key Features</h2>
                <div class="features-grid">
                    <?php foreach ($product['overview'] as $feature): ?>
                        <div class="feature-item">
                            <span class="feature-bullet">✔</span>
                            <span><?= htmlspecialchars($feature); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($product['specs'])): ?>
            <div class="detail-section">
                <h2 class="section-title">Technical Specifications</h2>
                <div class="specs-grid">
                    <?php foreach ($product['specs'] as $key => $value): ?>
                        <div class="spec-row">
                            <div class="spec-label"><?= htmlspecialchars($key); ?></div>
                            <div class="spec-value"><?= htmlspecialchars($value); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="detail-navigation">
            <a href="products.php" class="btn btn-back">← All Products</a>
            <a href="index.php#contact" class="btn btn-primary">Request Custom Quote</a>
        </div>
    </div>
</section>

<style>
/* Theme-Matched Styling */
:root {
    --primary-blue: #033d7b;
    --accent-gold: #c69432;
    --text-dark: #333;
}

.product-details-section { background: #fdfdfd; padding: 60px 0; }
.product-detail-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 40px; margin-bottom: 40px; }

.product-image-detail { 
    background: #fff; 
    border: 1px solid #eee; 
    border-radius: 8px; 
    padding: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    /* Fixes image sizing */
    height: 450px; 
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.product-image-detail img { 
    max-width: 100%; 
    max-height: 100%; 
    width: auto;
    height: auto;
    object-fit: contain; /* Ensures the whole product is visible */
    border-radius: 4px; 
    transition: transform 0.5s ease;
}

.product-image-detail img:hover {
    transform: scale(1.05); /* Subtle zoom for premium feel */
}
.product-title { color: var(--primary-blue); font-size: 32px; margin-bottom: 5px; }
.product-category { color: var(--accent-gold); font-weight: bold; text-transform: uppercase; font-size: 14px; margin-bottom: 20px; }
.product-description { color: #666; line-height: 1.7; margin-bottom: 30px; }

.price-box { background: #f0f5fa; border-radius: 8px; padding: 25px; margin-bottom: 30px; border-left: 5px solid var(--accent-gold); }
.price-item { display: flex; justify-content: space-between; margin-bottom: 10px; }
.price-value { color: var(--primary-blue); font-size: 22px; font-weight: 800; }
.moq-value { font-weight: 700; color: var(--text-dark); }

.btn-primary { background: var(--primary-blue); color: #fff; padding: 15px 30px; border-radius: 5px; font-weight: 600; text-align: center; }
.btn-secondary { border: 2px solid var(--primary-blue); color: var(--primary-blue); padding: 13px 30px; border-radius: 5px; font-weight: 600; text-align: center; }
.btn-secondary:hover { background: var(--primary-blue); color: #fff; }
.action-buttons { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }

.detail-section { background: #fff; padding: 40px; border-radius: 8px; margin-bottom: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); }
.section-title { color: var(--primary-blue); border-bottom: 2px solid var(--accent-gold); padding-bottom: 10px; margin-bottom: 25px; font-size: 24px; }

.feature-item { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; padding: 10px; background: #fafafa; border-radius: 5px; }
.feature-bullet { color: var(--accent-gold); font-weight: 900; }

.specs-grid { border: 1px solid #eee; border-radius: 8px; overflow: hidden; }
.spec-row { display: grid; grid-template-columns: 1fr 2fr; border-bottom: 1px solid #eee; }
.spec-row:last-child { border-bottom: none; }
.spec-label { background: #f8f9fa; padding: 15px; font-weight: 700; color: var(--primary-blue); }
.spec-value { padding: 15px; color: #555; }

.btn-back { background: #666; color: #fff; padding: 15px 30px; border-radius: 5px; }

@media (max-width: 768px) {
    .product-detail-grid { grid-template-columns: 1fr; }
    .action-buttons { grid-template-columns: 1fr; }
    .spec-row { grid-template-columns: 1fr; }
    .product-image-detail {
        height: 300px; /* Smaller height for mobile devices */
    }
}
</style>

<?php include 'footer.php'; ?>