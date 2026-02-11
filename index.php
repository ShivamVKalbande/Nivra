<?php 
include 'header.php'; 
include 'data/products.php';

// Get featured products for homepage
$red_chilli_products = array_slice(getProductsByCategory('red-chilli'), 0, 1);
$turmeric_products = array_slice(getProductsByCategory('turmeric'), 0, 1);

if (empty($turmeric_products)) {
    $featured_products = array_slice(getProductsByCategory('red-chilli'), 0, 2);
} else {
    $featured_products = array_merge($red_chilli_products, $turmeric_products);
}
?>

<section id="home" class="hero">
  <div class="container">
    <h2>Premium Quality Indian Spices</h2>
    <p>Government-approved exporter delivering high-quality Turmeric and Red Chilli from India to global markets.</p>
    <a href="#contact" class="btn-hero">Request Export Quote</a>
  </div>
</section>

<section class="section trust-section">
  <div class="container">
    <h2 class="section-title">Why Choose Nivra Enterprises</h2>
    <div class="features">
      <div class="feature-box">
        <img src="./images/13.png" alt="Government Approved" />
        <h4>Government Approved</h4>
        <p>Licensed by Spice Board of India & APEDA.</p>
      </div>
      <div class="feature-box">
        <img src="./images/14.png" alt="Direct Farm Sourcing" />
        <h4>Direct Farm Sourcing</h4>
        <p>Complete control from farm to port.</p>
      </div>
      <div class="feature-box">
        <img src="./images/15.png" alt="Lab Tested Quality" />
        <h4>Lab Tested Quality</h4>
        <p>Third-party lab testing & compliance.</p>
      </div>
      <div class="feature-box">
        <img src="./images/16.png" alt="Global Export Expertise" />
        <h4>Global Export Expertise</h4>
        <p>Serving international markets reliably.</p>
      </div>
    </div>
  </div>
</section>

<section id="quality" class="section" style="background:#f4f7f9">
  <div class="container">
    <h2 class="section-title">Global Food Safety & Standards</h2>
    <div class="info-grid">
      <div class="info-card">
        <span class="card-icon">🛡️</span>
        <h4>Safety Standards</h4>
        <p>We strictly adhere to global food safety standards, complying with FSSAI regulations and Good Manufacturing Practices (GMP). Our operations align with the FDA’s Food Safety Modernization Act (FSMA).</p>
      </div>
      <div class="info-card">
        <span class="card-icon">📜</span>
        <h4>Regulatory Compliance</h4>
        <p>Nivra Enterprises follows ISO 22000 standards. We ensure safety, labeling, and quality management to meet the requirements of both domestic and global spice markets.</p>
      </div>
      <div class="info-card">
        <span class="card-icon">✨</span>
        <h4>Premium Color & Texture</h4>
        <p>We control color intensity meticulously—vibrant bright red for Chilli and a rich golden-yellow for Turmeric. We ensure uniformity in particle size and texture across all batches.</p>
      </div>
    </div>
  </div>
</section>

<section class="section sourcing-section" style="background: #033d7b; color: white;">
  <div class="container">
    <h2 style="color: #c69432;">Authentic Indian Origin</h2>
    <p>We source from the finest regions to guarantee authenticity and flavor profiles.</p>
    <div class="origin-grid">
      <div class="origin-box">
        <h4>Red Chilli</h4>
        <p>Sourced from Andhra Pradesh & Karnataka (Guntur, Byadgi, and Teja varieties).</p>
      </div>
      <div class="origin-box">
        <h4>Turmeric</h4>
        <p>Procured from Kerala, Tamil Nadu, Madhya Pradesh, and Maharashtra.</p>
      </div>
      <div class="origin-box">
        <h4>Cumin & Spices</h4>
        <p>Sourced from Gujarat, Rajasthan, and emerging regions in Madhya Pradesh.</p>
      </div>
    </div>
  </div>
</section>

<section id="products" class="section">
  <div class="container">
    <h2 class="section-title">Our Signature Spices</h2>
    <div class="products">
        <?php foreach ($featured_products as $product): ?>
          <div class="product-card">
            <div class="product-image">
              <img src="<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>">
            </div>
            <div class="product-content">
              <h3><?= htmlspecialchars($product['name']); ?></h3>
              <p><?= htmlspecialchars($product['short_desc']); ?></p>
              <p><strong>MOQ:</strong> <?= htmlspecialchars($product['moq']); ?> Kg</p>
              <a href="product-details.php?id=<?= urlencode($product['id']); ?>" class="btn">View Specifications</a>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
    <div style="text-align: center; margin-top: 30px;">
        <a href="products.php" class="btn" style="background:#033d7b; color:white;">Explore All Products</a>
    </div>
  </div>
</section>

<section class="section" style="background:#f9f9f9">
  <div class="container">
    <div class="logistics-container">
      <div class="logistics-content">
        <h2>Customization & Global Logistics</h2>
        <ul>
          <li><strong>Client Specifications:</strong> We customize seasoning blends and adapt to unique quality requirements for global markets.</li>
          <li><strong>Versatile Packaging:</strong> Range from 100 grams up to 25 kilograms for retail or commercial needs.</li>
          <li><strong>Robust Shipping:</strong> Partnered with trusted carriers for timely deliveries. Packaging is designed to withstand the rigors of international transport.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="about" class="section">
  <div class="container">
    <div class="about-card">
        <h2>Our Evolution</h2>
        <p>Nivra Enterprises has its roots as a trusted domestic provider. Driven by global excellence, we transformed into <strong>Nivra Enterprises in 2026</strong>. Our international rebranding reflects our evolution into a globally recognized leader in the spice industry.</p>
        <div class="feedback-quote">
            <p>"We place immense value on customer feedback. Your insights directly influence our product development and quality enhancements."</p>
        </div>
    </div>
  </div>
</section>

<section id="contact" class="section" style="background:#f4f7f9">
  <div class="container">
    <h2 class="section-title">Connect With Our Export Team</h2>
    <div class="contact-box">
      
      <div class="contact-details">
        <h3>Direct Contacts</h3>
        <p class="contact-subtitle">Get in touch with our representatives for immediate assistance.</p>
        
        <div class="representative-grid">
          <div class="rep-card">
            <strong>Mayank Agrawal</strong>
            <a href="tel:+918871713115">+91 8871713115</a>
          </div>

          <div class="rep-card">
            <strong>Jivan Patil</strong>
            <a href="tel:+918605908855">+91 8605908855</a>
          </div>

          <div class="rep-card">
            <strong>Jyoti Kanoje</strong>
            <a href="tel:+917620274330">+91 7620274330</a>
          </div>
        </div>

        <div class="hq-info">
          <p><strong>Headquarters:</strong> Raipur, Chhattisgarh, India</p>
          <p><strong>Email:</strong> mayankpreneur@gmail.com</p>
        </div>
      </div>

      <form id="enquiryForm" class="contact-form">
        <h3>Send Business Inquiry</h3>
        <input type="text" name="name" placeholder="Full Name / Company Name" required />
        <input type="email" name="email" placeholder="Business Email Address" required />
        <textarea name="message" rows="5" placeholder="Please specify: Variety (e.g., Teja S17), Quantity (MT), and Destination Port." required></textarea>
        <button type="submit">Submit Export Inquiry</button>
      </form>
      
    </div>
  </div>
</section>

<style>
/* Header & Theme Colors */
:root { --primary-blue: #033d7b; --accent-gold: #c69432; }

.section-title { text-align: center; color: var(--primary-blue); margin-bottom: 40px; font-size: 28px; position: relative; padding-bottom: 10px; }
.section-title::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 60px; height: 3px; background: var(--accent-gold); }

/* Hero Styles */
.hero { background: linear-gradient(rgba(3,61,123,0.8), rgba(3,61,123,0.8)), url('images/hero-bg.jpg'); background-size: cover; padding: 100px 0; color: white; text-align: center; }
.btn-hero { display: inline-block; padding: 15px 35px; background: var(--accent-gold); color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-top: 20px; }

/* Grid Styles */
.info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; }
.info-card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent-gold); }
.card-icon { font-size: 40px; display: block; margin-bottom: 15px; }

.origin-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 30px; }
.origin-box { border: 1px solid var(--accent-gold); padding: 20px; border-radius: 8px; background: rgba(255,255,255,0.05); }

/* Logistics & About */
.logistics-container { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
.logistics-content ul { list-style: none; padding: 0; }
.logistics-content li { margin-bottom: 15px; padding-left: 30px; position: relative; }
.logistics-content li::before { content: '✓'; position: absolute; left: 0; color: var(--accent-gold); font-weight: bold; }

.about-card { max-width: 900px; margin: 0 auto; text-align: center; }
.feedback-quote { margin-top: 30px; font-style: italic; color: #555; padding: 20px; border-left: 5px solid var(--accent-gold); background: #fefefe; }

/* Mobile Optimization */
@media (max-width: 768px) {
    .features, .products { grid-template-columns: 1fr; }
    .contact-box { grid-template-columns: 1fr; }
}
</style>

<?php include 'footer.php'; ?>