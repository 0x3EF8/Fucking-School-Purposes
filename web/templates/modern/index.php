<?php
// Include configuration
require_once '../../config/config.php';

// Set page variables
$current_page = 'home';
$page_title = $site_pages['home']['title'];

// Include header
include 'includes/header.php';
?>

<div class="content-wrapper">
  <!-- Main Content Area -->
  <div class="content-main">
    <section id="products" class="products">
      <?php foreach ($products as $product): ?>
        <div class="product">
          <img src="../../assets/img/nukes/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
          <h2><?php echo htmlspecialchars($product['name']); ?></h2>
          <p><?php echo htmlspecialchars($product['description']); ?></p>
          <div class="price"><?php echo htmlspecialchars($product['price']); ?></div>
          <button>Buy Now</button>
        </div>
      <?php endforeach; ?>
    </section>
  </div>

  <!-- Right Sidebar - Ads -->
  <aside class="ads-sidebar">
    <div class="ad-section">
      <h3><?php echo $ads['featured_deals']['title']; ?></h3>
      <div class="ad-card">
        <div class="ad-badge"><?php echo $ads['featured_deals']['hot_offer']['badge']; ?></div>
        <h4><?php echo $ads['featured_deals']['hot_offer']['title']; ?></h4>
        <p><?php echo $ads['featured_deals']['hot_offer']['description']; ?></p>
        <button class="ad-btn"><?php echo $ads['featured_deals']['hot_offer']['button']; ?></button>
      </div>
    </div>

    <div class="ad-section">
      <h3><?php echo $ads['special_promotions']['title']; ?></h3>
      <div class="ad-card">
        <div class="ad-badge"><?php echo $ads['special_promotions']['stealth_package']['badge']; ?></div>
        <h4><?php echo $ads['special_promotions']['stealth_package']['title']; ?></h4>
        <p><?php echo $ads['special_promotions']['stealth_package']['description']; ?></p>
        <button class="ad-btn"><?php echo $ads['special_promotions']['stealth_package']['button']; ?></button>
      </div>
    </div>

    <div class="ad-section">
      <h3><?php echo $ads['customer_reviews']['title']; ?></h3>
      <?php foreach ($ads['customer_reviews']['reviews'] as $review): ?>
        <div class="review-card">
          <div class="stars"><?php echo $review['stars']; ?></div>
          <p><?php echo $review['text']; ?></p>
          <small>- <?php echo $review['author']; ?></small>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="ad-section">
      <h3><?php echo $ads['newsletter']['title']; ?></h3>
      <div class="newsletter-card">
        <p><?php echo $ads['newsletter']['description']; ?></p>
        <input type="email" placeholder="<?php echo $ads['newsletter']['placeholder']; ?>" class="newsletter-input">
        <button class="newsletter-btn"><?php echo $ads['newsletter']['button']; ?></button>
      </div>
    </div>
  </aside>
</div>

<?php include 'includes/footer.php'; ?>
