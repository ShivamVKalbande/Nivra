<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isHome = ($currentPage === 'index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Nivra Enterprises | Premium Indian Spices Exporter (Turmeric & Chilli)</title>
  <meta name="description" content="Nivra Enterprises is a government-approved Indian exporter specializing in premium turmeric, red chilli, and high-quality Indian spices. Based in India, serving global markets." />
  <meta name="keywords" content="Nivra Enterprises, Indian Spices Exporter, Turmeric Exporter India, Red Chilli Supplier, Premium Spices India" />

  <meta property="og:type" content="website" />
  <meta property="og:title" content="Nivra Enterprises | Premium Indian Spices Exporter" />
  <meta property="og:description" content="Top-quality turmeric and red chilli exporter from India. Government approved." />
  <meta property="og:url" content="https://nivraenterprise.com/" />
  <meta property="og:image" content="https://nivraenterprise.com/images/og-image.jpg" />

  <link rel="icon" href="./images/favicon.png" type="image/png" />
  <link rel="stylesheet" href="./css/style.css">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Nivra Enterprises",
    "url": "https://nivraenterprise.com",
    "logo": "https://nivraenterprise.com/images/logo-transparent.png",
    "description": "Government-approved Indian exporter of premium turmeric and red chilli.",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "India"
    }
  }
  </script>
</head>

<body>

<header>
  <nav>
    <a href="<?= $isHome ? '#home' : 'index.php#home'; ?>" class="logo-box">
      <img src="./images/logo-transparent.png" alt="Nivra Enterprises Logo" />
      <span>Nivra Enterprises</span>
    </a>

    <div class="nav-links">
      <a href="<?= $isHome ? '#home' : 'index.php#home'; ?>">Home</a>
      
      <div class="dropdown">
        <a href="products.php" class="dropbtn">Categories <small>▼</small></a>
        <div class="dropdown-content">
          <div class="nested-dropdown">
            <a href="products.php?category=all" class="nested-btn">Spices <span>▶</span></a>
            <div class="nested-content">
              <a href="product-details.php?id=turmeric-premium">Turmeric</a>
              <a href="product-details.php?id=red-chilli-premium">Red Chilli</a>
            </div>
          </div>
        </div>
      </div>

      <!-- <a href="<?= $isHome ? '#about' : 'index.php#about'; ?>">About Us</a> -->
      <a href="<?= $isHome ? '#quality' : 'index.php#quality'; ?>">Quality</a>
      <a href="<?= $isHome ? '#contact' : 'index.php#contact'; ?>">Contact</a>
    </div>
  </nav>
</header>
