<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isHome = ($currentPage === 'index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Nivra Enterprises | Premium Indian Spices Exporter</title>

  <link rel="icon" href="./images/favicon.png" type="image/png" />
  <link rel="icon" href="./images/favicon.svg" type="image/svg+xml" />

  <meta name="description"
    content="Nivra Enterprises is a government-approved Indian exporter of premium turmeric and red chilli." />

  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<header>
  <nav>
    <a href="<?= $isHome ? '#home' : 'index.php#home'; ?>" class="logo-box">
      <img src="./images/logo-transparent.png" alt="Nivra Enterprises Logo" />
      <span>Nivra Enterprises</span>
    </a>

    <div>
      <a href="<?= $isHome ? '#home' : 'index.php#home'; ?>">Home</a>
      <a href="products.php">Products</a>
      <a href="<?= $isHome ? '#about' : 'index.php#about'; ?>">About Us</a>
      <a href="<?= $isHome ? '#quality' : 'index.php#quality'; ?>">Quality</a>
      <a href="<?= $isHome ? '#contact' : 'index.php#contact'; ?>">Contact</a>
    </div>
  </nav>
</header>
