<?php 
include 'header.php'; 
include 'data/products.php'; 

// Get category from URL, default to 'all' for this main listing page
$category = isset($_GET['category']) ? trim($_GET['category']) : 'all';
$allowed_categories = ['red-chilli', 'turmeric', 'all'];

if (!in_array($category, $allowed_categories)) {
    $category = 'all';
}

// Get filtered products using the logic in your data/products.php
$filtered_products = ($category === 'all') ? $products : getProductsByCategory($category);

// Dynamic Page Titles
$page_titles = [
    'red-chilli' => 'Premium Red Chilli Collection',
    'turmeric'   => 'Premium Turmeric Collection',
    'all'        => 'Our Spice Categories'
];

$page_title = isset($page_titles[$category]) ? $page_titles[$category] : 'Our Products';
?>

<section class="products-hero">
    <div class="container">
        <h1><?= htmlspecialchars($page_title); ?></h1>
        <p>Directly sourced from India's finest farms to global markets.</p>
    </div>
</section>

<section class="section" style="background:#f4f7f9">
    <div class="container">
        
        <div class="filter-container">
            <a href="products.php?category=all" 
               class="filter-btn <?= $category === 'all' ? 'active' : ''; ?>">
                All Spices
            </a>
            <a href="products.php?category=red-chilli" 
               class="filter-btn <?= $category === 'red-chilli' ? 'active' : ''; ?>">
                Red Chilli
            </a>
            <a href="products.php?category=turmeric" 
               class="filter-btn <?= $category === 'turmeric' ? 'active' : ''; ?>">
                Turmeric
            </a>
        </div>

        <?php if (empty($filtered_products)): ?>
            <div class="no-products">
                <p>Coming Soon: More varieties are being added to our export list.</p>
            </div>
        <?php else: ?>
            <div class="products-grid">
                <?php foreach ($filtered_products as $product): ?>
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <img src="<?= htmlspecialchars($product['image']); ?>" 
                                 alt="<?= htmlspecialchars($product['name']); ?>"
                                 onerror="this.src='images/placeholder.jpg'">
                            <div class="category-badge"><?= ucfirst($product['category']); ?></div>
                        </div>

                        <div class="product-content">
                            <h3><?= htmlspecialchars($product['name']); ?></h3>
                            <p class="short-desc"><?= htmlspecialchars($product['short_desc']); ?></p>
                            
                            <div class="product-meta">
                                <span><strong>Price:</strong> <?= htmlspecialchars($product['price']); ?></span>
                                <span><strong>MOQ:</strong> <?= htmlspecialchars($product['moq']); ?> Kg</span>
                            </div>

                            <a href="product-details.php?id=<?= urlencode($product['id']); ?>" class="view-btn">
                                View Specifications
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<style>
/* Theme Variables */
:root {
    --primary-blue: #033d7b;
    --accent-gold: #c69432;
    --bg-light: #f4f7f9;
}

/* Hero Header */
.products-hero {
    background: linear-gradient(rgba(3, 61, 123, 0.9), rgba(3, 61, 123, 0.9)), url('images/spices-bg.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 60px 0;
    text-align: center;
}

.products-hero h1 { font-size: 36px; margin-bottom: 10px; }
.products-hero p { color: var(--accent-gold); font-size: 18px; }

/* Filter Buttons */
.filter-container { text-align: center; margin-bottom: 50px; }
.filter-btn {
    display: inline-block;
    padding: 12px 25px;
    margin: 5px;
    background: #fff;
    color: var(--primary-blue);
    text-decoration: none;
    border: 2px solid var(--primary-blue);
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.filter-btn:hover, .filter-btn.active {
    background: var(--primary-blue);
    color: #fff;
    box-shadow: 0 4px 15px rgba(3, 61, 123, 0.2);
}

/* Products Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
}

.product-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.product-card:hover { transform: translateY(-10px); }

/* Image Fixed Properly */
.product-image-wrapper {
    height: 250px;
    position: relative;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    border-bottom: 1px solid #eee;
}

.product-image-wrapper img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.category-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--accent-gold);
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
}

/* Content Area */
.product-content { padding: 25px; }
.product-content h3 { color: var(--primary-blue); margin-bottom: 15px; font-size: 22px; }
.short-desc { color: #666; font-size: 14px; line-height: 1.6; margin-bottom: 20px; height: 45px; overflow: hidden; }

.product-meta {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    margin-bottom: 25px;
    padding-top: 15px;
    border-top: 1px solid #eee;
}

.view-btn {
    display: block;
    text-align: center;
    background: var(--primary-blue);
    color: white;
    padding: 12px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
}

.view-btn:hover { background: #022a55; }

.no-products { text-align: center; padding: 100px 0; color: #888; }
</style>

<?php include 'footer.php'; ?>